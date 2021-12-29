<?php $title = 'Water';	?>

<?php include 'header.php'; ?>

    <h2>Water</h2>

    <p>Water is an important part of the ecology of Cooleman Ridge. Unfortunately, water is one feature of the ridge that is not very common with little in the way of permanent natural water sources.</p>

    <h3>Creeks</h3>

    <p>Cooleman Ridge is the headwaters for four creeks.</p>

    <ul>
        <li><strong>Bulgar Creek</strong> - located on the north west of the ridge and flows to the Murrumbidgee River.</li>
        <li><strong>Weston Creek</strong> - located on the north east side of the ridge and flows into the Molonglo River.</li>
        <li><strong>Village Creek</strong> - located on the the south east end of the ridge and flows into Lake Tuggeranong.</li>
        <li><strong>New Station Creek</strong> - located on the south west edge of the ridge and flows into the Murrumbidge River.</li>
    </ul>

    <p>There are no permanent water courses found on the ridge. The creeks are intermittent and only flow for a short time after heavy rain.</p>

    <h3>Dams</h3>

    <p>
        These dams were created principally to support cattle grazing on the ridge, either prior to the ridge becoming a reserve (eg. The Old Dam and Dry Dams) or after it (e.g. Kathner Street Dam). A secondary reason for their creation was to help in firefighting in the event of a fire occuring on the ridge.
    </p>

    <p>
        The main role these dams serve today is to act as artificial wetlands. They provide important habitats for various aquatic species including fish, frogs, ducks, turtles and insects. They play an important role in preserving the biodiversity of the ridge.
    </p>

    <p>
        These dams are a major focus of the work that group does as they provide both important environmental and recreational benefits.
    </p>

    <p>
        These dams are the focus of our Dam Survey which provides a photographic record of the dams over several years. Please see our <a href="dam-survey">Dam Survey</a> page for more details.
    </p>

    <p>
        Please click on one of the markers to obtain more information about the various dams found on the ridge.
    </p>


    <div id="watermap" class="map"></div>

    <script>
        let map;

        function initMap() {


            var mapOptions = {
                zoom: 15,

                center: { lat: -35.361451, lng: 149.033615 },

                mapTypeId: google.maps.MapTypeId.SATELLITE
            };

            map = new google.maps.Map(document.getElementById('watermap'), mapOptions);

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/maps/water.kml',

                map: map

            });
        }
    </script>

    <div>
        <a href="/maps/water.kml">Export as KML file</a>
    </div>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php include 'googleapi.php'; ?>

<?php include 'footer.php'; ?>