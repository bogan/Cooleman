<?php $title = 'Plant List';	?>
<?php include 'header.php'; ?>
<?php include 'plantsrepository.php'; ?>

<div>
    <table style="width:100%;">
        <tr>
            <td>

                <table align="left">
                    <tr>
                        <td width="20">&nbsp;</td>
                        <td align="left" valign="top">
                            <h2><font color="#ba7025" face="ARIAL">Plant List</font></h2>
                        </td>
                        <td width="20">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="right">* - denotes exotic</td>
        </tr>
        <tr>
            <td>
                <table class="js-dynamitable table table-bordered table-small table-striped">

                    <!-- table heading -->
                    <thead>

                    <!-- Sortering
												* js-sorter-asc => ascending sorter trigger
												* js-sorter-desc => desending sorter trigger
												-->
                    <tr>
                        <th>Category <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                        <th>Family <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                        <th>Genus <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                        <th>Species <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                        <th>Common Name <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                        <th style="width:100px">Native <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                        <th>Frequency <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                        <th>Newsletter <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                        <th>Source <span class="js-sorter-desc glyphicon glyphicon-chevron-down pull-right"></span> <span class="js-sorter-asc glyphicon glyphicon-chevron-up pull-right"></span> </th>
                    </tr>

                    <!-- Filtering * js-filter => filter trigger (input, select) -->
                    <tr>
                        <th><input  class="js-filter form-control" type="text" value=""></th>
                        <th><input  class="js-filter form-control" type="text" value=""></th>
                        <th><input class="js-filter form-control" type="text" value=""></th>
                        <th><input class="js-filter form-control" type="text" value=""></th>
                        <th><input class="js-filter form-control" type="text" value=""></th>
                        <th>
                            <select class="js-filter form-control">
                                <option value=""></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </th>
                        <th><input class="js-filter form-control" type="text" value=""></th>
                        <th><input class="js-filter form-control" type="text" value=""></th>
                        <th><input class="js-filter form-control" type="text" value=""></th>
                    </tr>
                    </thead>

                    <!-- table body -->
                    <tbody>

                    <?php



                    $result->data_seek(0);



                    while($row = $result->fetch_assoc()) {
                        $id = $row["id"];

                        echo "<tr>";

                        echo "<td>" . $row["category"]. "</td>";

                        echo "<td>" . $row["family"]. "</td>";

                        echo "<td>" . $row["genus"]. "</td>";

                        echo "<td>" . $row["species"]. "</td>";

                        echo "<td>" . $row["common_name"]. "</td>";

                        echo "<td>" . $row["native"]. "</td>";

                        echo "<td>" . $row["frequency"]. "</td>";

                        echo "<td>" . $row["newsletter"]. "</td>";

                        echo "<td>" . $row["source"]. "</td>";
                        //	echo "<td><a href=\"blackberry.php?id=$id\">" . "Edit</a></td>";

                        echo "</tr>";

                    }



                    ?>









                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</div>

<script src="dynamitable.jquery.min.js"></script>

<?php include 'footer.php'; ?>
