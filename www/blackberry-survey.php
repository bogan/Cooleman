<?php $title = 'About';	?>

<?php include 'header.php'; ?>
<?php include 'blackberry-repository.php'; ?>

<div class="col-sm-8">

    <h2>Blackberry Survey</h2>

    <p>
        The Cooleman Ridge Parkcare Group undertakes an ongoing blackberry survey.
    </p>

    <p>
        Blackberries are surveyed because they are a <a href="https://profiles.ala.org.au/opus/weeds-australia/profile/Rubus%20fruticosus%20aggregate">Weed of National Significance<a/> and are a significant problem on the ridge, particularly on the eastern end near Mt Arawang
    </p>

    <p>
        The survey helps to assist in a ACT Government management program to eradicate blackberries from the ridge and other Nature Parks in the ACT.
    </p>

    <p>
        The group informs the ACT Parks and Conservation Service of their location and they organise for them to be sprayed as part of their annual blackberry control program.
    </p>

    <p>
        The map below details the precise location of individual blackberry bushes that have been identified on the ridge. You can click on each marker to obtain the precise information about each individual occurrence.
    </p>

    <p>
        If you would like to notify the group of a blackberry bush that is not currently listed then please contact us via our <a href="/contact">contact</a> page.
    </p>

    <div id="map" style="width:1000px;height:760px;"></div>

    <script>

        function initMap() {



            var locations = [



                <?php



                while($row = $result->fetch_assoc()) {



                    $id = $row["id"];

                    $source = $row["source"];

                    $easting = $row["easting"];

                    $northing = $row["northing"];

                    $latitude = $row["latitude"];

                    $longitude = $row["longitude"];

                    $size = $row["size"];

                    $density = $row["density"];

                    $health = $row["health"];

                    $burnt = $row["burnt"];

                    $comment = $row["comment"];

                    $creation_date = date_format(date_create($row["creation_date"]),"d-m-Y");

                    $last_updated_date = date_format(date_create($row["last_updated_date"]),"d-m-Y");



                    echo "[$id, \"$source\", $easting, $northing, $latitude, $longitude, \"$size\", \"$density\", \"$health\", \"$burnt\", \"$comment\", \"$creation_date\", \"$last_updated_date\"],";

                }



                ?>

            ];



            var map = new google.maps.Map(document.getElementById('map'), {

                zoom: 15,

                center: { lat: -35.361451, lng: 149.033615 },

                mapTypeId: google.maps.MapTypeId.SATELLITE

            });



            for (i = 0; i < locations.length; i++)

            {

                addLocation(map, locations[i])

            }

        }



        function addLocation(map, location) {



            var id = location[0];

            var source = location[1];

            var easting = location[2];

            var northing = location[3];

            var latitude = location[4];

            var longitude = location[5];

            var size = location[8];

            var density = location[7];

            var health = location[8];

            var burnt = location[9];

            var comment = location[10];

            var creation_date = location[11];

            var last_updated_date = location[12];



            var patch = new google.maps.LatLng(latitude, longitude);

            var marker = new google.maps.Marker({ position: patch, map: map, label: id.toString(), title: "ID# " + id.toString() });

            var url = "http://maps.google.com/?q=loc:" + latitude + "," + longitude + "&z=17&t=k";



            var contentString =

                "<div>" +

                "<p><b>ID:</b> " + id.toString() + "</p>" +

                "<p><b>Source:</b> " + source.toString() + "</p>" +

                "<p><b>Latitude:</b> " + latitude.toString() + "</p>" +

                "<p><b>Longitude:</b> " + longitude.toString() + "</p>" +

                "<p><b>Easting:</b> " + easting.toString() + "</p>" +

                "<p><b>Northing:</b> " + northing.toString() + "</p>" +

                "<p><b>Size:</b> " + size + "</p>" +

                "<p><b>Density:</b> " + density + "</p>" +

                "<p><b>Health:</b> " + health + "</p>" +

                "<p><b>Burnt:</b> " + burnt + "</p>" +

                "<p><b>Comment:</b> " + comment + "</p>" +

                "<p><b>Creation Date:</b> " + creation_date + "</p>" +

                "<p><b>Last Updated Date:</b> " + last_updated_date + "</p>" +

                "<p><a href=\"" + url + "\">Open in Google Maps</a></p>" +



                "</div>";



            //



            var infowindow = new google.maps.InfoWindow({

                content: contentString

            });



            marker.addListener('click', function () {

                infowindow.open(map, marker);

            });

        }



    </script>

    <p>
        <a href="blackberry-kml.php">Export as KML file</a> (to view in Google Earth etc)
    </p>

    <p>
        <a href="blackberry-csv.php">Export as CSV file </a> (to view in Microsoft Excel etc)
    </p>

    <p>
        The following table summarises the information contained in the map above.
    </p>


    <div style="overflow-x:auto;">

        <table border="1" cellpadding="0" cellspacing="0">

            <tr>

                <th>ID</th>

                <th>Source</th>

                <th>Easting</th>

                <th>Northing</th>

                <th>Latitude</th>

                <th>Longitude</th>

                <th>Size</th>

                <th>Density</th>

                <th>Health</th>

                <th>Burnt</th>

                <th>Comment</th>

                <th>Creation Date</th>

                <th>Last Updated Date</th>

                <!--    <th>Action</th>-->

            </tr>



            <?php



            $result->data_seek(0);



            while($row = $result->fetch_assoc()) {



                $id = $row["id"];

                $creation_date = date_create($row["creation_date"]);

                $last_updated_date = date_create($row["last_updated_date"]);



                echo "<tr>";

                echo "<td>" . $row["id"]. "</td>";

                echo "<td>" . $row["source"]. "</td>";

                echo "<td>" . $row["easting"]. "</td>";

                echo "<td>" . $row["northing"]. "</td>";

                echo "<td>" . $row["latitude"]. "</td>";

                echo "<td>" . $row["longitude"]. "</td>";

                echo "<td>" . $row["size"]. "</td>";

                echo "<td>" . $row["density"]. "</td>";

                echo "<td>" . $row["health"]. "</td>";

                echo "<td>" . $row["burnt"]. "</td>";

                echo "<td>" . $row["comment"]. "</td>";

                echo "<td>" . date_format($creation_date,"d/m/Y"). "</td>";

                echo "<td>" . date_format($last_updated_date,"d/m/Y"). "</td>";

    //	echo "<td><a href=\"blackberry.php?id=$id\">" . "Edit</a></td>";

                echo "</tr>";

            }



            ?>

        </table>

    </div>


    <p class="tbc">To Be Completed</p>

</div>
<div class="col-sm-2">

</div>


<?php include 'googleapi.php'; ?>

<?php include 'footer.php'; ?>

