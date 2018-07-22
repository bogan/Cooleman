<?php $title = 'Plant List';	?>
<?php include 'header.php'; ?>
<?php include 'plantsrepository.php'; ?>

<h2>Plant List</h2>

<div>
    <p>The following is a list of all plant species that have been identified on Cooleman Ridge.</p>

    <br>
</div>

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
        <tbody>

        <?php

        $result->data_seek(0);

        while($row = $result->fetch_assoc()) {
            $id = $row["id"];

            echo "<tr>";
            echo "<td>" . $row["category"]. "</td>";
            //echo "<td>" . $row["sub_category"]. "</td>";
            echo "<td>" . $row["family"]. "</td>";
            echo "<td>" . $row["genus"]. "</td>";
            echo "<td>" . $row["species"]. "</td>";
            echo "<td>" . $row["common_name"]. "</td>";
            echo "<td>" . $row["native"]. "</td>";
            echo "<td>" . $row["frequency"]. "</td>";
            echo "<td>" . $row["newsletter"]. "</td>";
            echo "<td>" . $row["source"]. "</td>";
            echo "</tr>";
        }

        ?>

        </tbody>
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

<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );

        // DataTable
        var table = $('#example').DataTable();

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

        $('#example tfoot tr').appendTo('#example thead');

        $('a.toggle-vis').on( 'click', function (e) {
            e.preventDefault();

            // Get the column API object
            var column = table.column( $(this).attr('data-column') );

            // Toggle the visibility
            column.visible( ! column.visible() );
        } );

        $('input.toggle-vis').on( 'change', function (e) {
            e.preventDefault();

            // Get the column API object
            var column = table.column( $(this).attr('data-column') );

            // Toggle the visibility
            column.visible( ! column.visible() );
        } );

        table.column( 1 ).visible(false);
        table.column( 5 ).visible(false);
        table.column( 6 ).visible(false);
        table.column( 7 ).visible(false);
        table.column( 8 ).visible(false);

        // blah
    } );
</script>

<?php include 'footer.php'; ?>
