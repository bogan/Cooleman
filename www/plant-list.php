<?php $title = 'About';	?>

<?php include 'header.php'; ?>
<?php include 'plant-repository.php'; ?>

<div class="col-sm-8">

    <h2>Plant List</h2>

    <p>
        The Cooleman Ridge Parkcare Group conducts an ongoing Plant List. The main objective of the list is to identify all plant species (native and exotic) that occur or have occurred on the ridge.
    </p>

    <p>
        This survey complements a similar list of plants that are reported on the <a href="http://canberra.naturmapr.org">Canberra Nature Map</a> web site.
    </p>

    <p>
        The following is a list of all plant species that have been identified on Cooleman Ridge.
        If you would like to notify the group of a plant species that is not currently listed then please contact us via our <a href="!#contact">contact</a> page.
    </p>

    <p>
        <a href="plant-csv.php">Download as CSV</a>
    </p>

    <div class="checkbox">
        <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="0" value="" checked>Category</label>
        <!--    <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="1" value="" checked>Sub Category</label>-->
        <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="1" value="">Family</label>
        <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="2" value="" checked>Genus</label>
        <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="3" value="" checked>Species</label>
        <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="4" value="" checked>Common Name</label>
        <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="5" value="">Native</label>
        <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="6" value="">Frequency</label>
        <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="7" value="">Newsletter</label>
        <label class="checkbox-inline"><input type="checkbox" class="toggle-vis" data-column="8" value="">Source</label>
    </div>

    <div>
        <table id="plants" class="display table table-bordered table-small table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Category</th>
                <!--            <th>Sub Category</th>-->
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
                <!--            //<th>Sub Category</th>-->
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
            $('#plants tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );

            // Create DataTable
            $(document).ready(function() {
                var table = $('#plants').DataTable( {
                    "ajax": 'api/plants.php',
                    "order": [[ 0, "asc" ]],
                    "columns": [
                        { "data": "category" },
                        // { "data": "sub_category" },
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
                    $('#plants tfoot tr').appendTo('#plants thead');

                    // Add event handler to check box to toggle the visibility of the columns
                    $('input.toggle-vis').on( 'change', function (e) {
                        e.preventDefault();

                        // Get the column API object
                        var column = table.column( $(this).attr('data-column') );

                        // Toggle the visibility
                        column.visible( ! column.visible() );
                    } );

                    // Hide certain columns by default
                    table.column( 1 ).visible(false);
                    table.column( 5 ).visible(false);
                    table.column( 6 ).visible(false);
                    table.column( 7 ).visible(false);
                    table.column( 8 ).visible(false);
                } );
            } );
        } );
    </script>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

</div>
<div class="col-sm-2">

</div>


<?php include 'footer.php'; ?>
