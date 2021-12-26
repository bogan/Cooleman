<?php $title = 'About';	?>

<?php include 'header.php'; ?>
<?php include 'animalsrepository.php'; ?>

<h2>Animal Survey</h2>

<p>
    The Cooleman Ridge Parkcare Group conducts an ongoing Animal Survey. The main objective of the survey is to identify all the animal species (native and exotic) that occur or have occurred on the ridge.
</p>

<p>
    This survey complements a similar list of animals that are reported on the <a href="http://canberra.naturmapr.org">Canberra Nature Map</a> web site.
</p>

<p>
    The following is a list of all animal species that have been identified on Cooleman Ridge.
    If you would like to notify the group of a animal species that is not currently listed then please contact us via our <a href="contact.php">contact</a> page.
</p>

<div class="checkbox">
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="0" value="" checked>Category</label>
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="1" value="" checked>Sub Category</label>
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="2" value="">Family</label>
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="3" value="" checked>Genus</label>
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="4" value="" checked>Species</label>
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="5" value="" checked>Common Name</label>
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="6" value="">Native</label>
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="7" value="">Frequency</label>
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="8" value="">Newsletter</label>
    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="9" value="">Source</label>
</div>

<div>
    <table id="animals" class="display table table-bordered table-small table-striped" style="width:100%">
        <thead>
        <tr>
            <th>Category</th>
            <th>Sub Category</th>
            <th>Family</th>
            <th>Genus</th>
            <th>Species</th>
            <th>Common Name</th>
            <th>Native</th>
            <th>Frequency</th>
            <th>Newsletter</th>
            <th>Source</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>Category</th>
            <th>Sub Category</th>
            <th>Family</th>
            <th>Genus</th>
            <th>Species</th>
            <th>Common Name</th>
            <th>Native</th>
            <th>Frequency</th>
            <th>Newsletter</th>
            <th>Source</th>
        </tr>
        </tfoot>
    </table>
</div>

<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#animals tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );

        // Create DataTable
        $(document).ready(function() {
            var table = $('#animals').DataTable( {
                "ajax": 'api/animals.php',
                "order": [[ 0, "asc" ]],
                "columns": [
                    { "data": "category" },
                    { "data": "sub_category" },
                    { "data": "family" },
                    { "data": "genus" },
                    { "data": "species" },
                    { "data": "common_name" },
                    { "data": "native" },
                    { "data": "frequency" },
                    { "data": "newsletter" },
                    { "data": "source" }
                ]
            } );

            // Add event handler to set up searching and column selection after AJAX has loaded/
            // NOTE: Eventing hooking Must happen after AJAX has loaded.
            table.on( 'xhr', function ( e, settings, json ) {

                // Apply the search
                table.columns().every( function () {
                    var that = this;

                    $( 'input', this.footer() ).on( 'keyup change', function () {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    } );
                } );

                // Move the column search fields to the top instead of the bottom
                $('#animals tfoot tr').appendTo('#animals thead');

                // Add event handler to check box to toggle the visibility of the columns
                $('input.toggle-vis').on( 'change', function (e) {
                    e.preventDefault();

                    // Get the column API object
                    var column = table.column( $(this).attr('data-column') );

                    // Toggle the visibility
                    column.visible( ! column.visible() );
                } );

                // Hide certain columns by default
                table.column( 2 ).visible(false);
                table.column( 6 ).visible(false);
                table.column( 7 ).visible(false);
                table.column( 8 ).visible(false);
                table.column( 9 ).visible(false);
            } );
        } );
    } );
</script>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php include 'footer.php'; ?>

