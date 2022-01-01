<?php $title = 'About';	?>

<?php include 'header.php'; ?>

<div class="col-sm-8">

    <h2>Group Areas</h2>

    <p>
        The Cooleman Ridge Parkcare Group has defined several special "group areas" on the ridge. These are:
    <ul>
        <li>Group Area Kathner </li>

        <li>Group Area Chauvel </li>

        <li>Group Area Monkman </li>

        <li>Group Area Darrell </li>

        <li>Group Area Lincoln </li>

        <li>Group Area Namatjira </li>

    </ul>
    </p>

    <p>They are simply named after the street from which they are accessed.</p>

    <p>
        The main purpose of these Group Areas is to be the venue for one of our regular monthly <a href="meetings">group meetings</a>. The group generally rotates through each of these group areas, progressing from west to east, over a period of approximately six months. Each group area is therefore visited approximately 2 or 3 times a year.
    </p>

    <p>
        The location for these groups areas have been selected based on a variety of criteria. These include:
    <ul>
        <li>Ease of access</li>
        <li>Ecological value</li>
        <li>Work value</li>
        <li>Community visibility</li>
        <li>Fuel reduction potential</li>
        <li>Even distribution across the ridge</li>
    </ul>
    </p>

    <p>
        The Group Areas are an important part of the groups <a href="strategy">strategy</a> to rehabilitate the ridge. The main functions of the Group Work Areas include the following:

    <ul>
        <li>
            Serve as the foundation and focus of the long term goal to restore the health of the ridge.
        </li>
        <li>
            Act as a reservoir of high quality biological diversity that forms the nucleus of future regeneration expansion on the ridge.
        </li>
        <li>
            Act as showpieces of the what the ridge has to offer for both educational and inspirational purposes.
        </li>
        <li>
            Allow the group to focus on the areas that are most valuable and thus help in maximising the effectiveness the groups work.
        </li>
        <li>
            Demonstrate the effectiveness of the groups strategy at rehabilitating the ridge to its natural state.
        </li>
        <li>
            Promote the work of the group and thereby encourage other people to join the group in achieving its objectives.
        </li>
    </ul>
    </p>

    <p>
        The Group Areas were established shortly after the 2003 bushfires. The areas have each now been <a href="work">worked</a> on multiple times over the years and have shown major <a href="achievements">improvements</a>, with some of the areas now being very close to their original state.
    </p>

    <p>
        The long term goal for the Group Areas areas is to progressively expand them and then ultimately link them with one another to form a single large continuous area of high quality native vegetation.
    </p>

    <p>
        The following map displays the Group Areas. You can click on a coloured area for more specific information about each of the group areas.
    </p>

    <div id="areas-map" style="height: 600px" class="map"></div>

    <script>
        let map;

        function initMap() {


            var mapOptions = {
                zoom: 15,

                center: { lat: -35.361451, lng: 149.033615 },

                mapTypeId: google.maps.MapTypeId.SATELLITE
            };

            map = new google.maps.Map(document.getElementById('areas-map'), mapOptions);

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/maps/groupareas.kml',

                map: map

            });
        }
    </script>

    <div>
        <a href="/groupareas.kml">Export as KML file</a>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

</div>
<div class="col-sm-2">

</div>

<?php include 'googleapi.php'; ?>

<?php include 'footer.php'; ?>

