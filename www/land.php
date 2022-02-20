<?php $title = 'Location';	?>

<?php include 'header.php'; ?>

<div class="col-sm-8">

    <h2>Land</h2>

    <h3 id="location">Location</h3>

    <p>Cooleman Ridge is situated between the Canberra suburbs of Chapman (to the north)
        and Kambah (to the south). The ridge runs in general north-west to south-east direction, is about 3.5 km long with an area
        of 187 ha. Its highest point is Mt Arawang (765 m) with a general level
        of 600 m above sea level. The ridge offers extensive views east and north over
        Canberra and west over the Bullen, Tidbinbilla and Brindabella ranges.</p>

    <p>The Ridge can be accessed from many places in Chapman:

        Kathner St (northern end), Chauvel Circle, Monkman Cct, Titheridge Pl, Freebody Pl, Darrell Pl, Guinness Pl, Chapman Primary School green belt, Hertz Pl, Lincoln Pl, Pelham Cl, Namatjira Dr, Mt Arawang (southern end).

        Access from Kambah is via Fisken Cr, McGivern Cr and the Kambah Pony Club.</p>


<!--    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13015.342693021319!2d149.03646483522206!3d-35.359724246198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1444473478793" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>-->

    <h3 id="geology">Geology</h3>

    <p>Canberra is built largely on rocks of Ordovician age (420 million years old).
        Cooleman Ridge sits almost entirely on Ordovician volcanic rocks referred to as the Laidlaw Volcanic Suite.
        This suite is divided into two units or formations which are slightly different in composition.
        The older unit is referred to as the Deakin Volcanics and the younger unit as the Laidlaw Volcanics.
        The saddle between Narrabundah Hill and Cooleman Ridge forms the boundary between the Deakin Volcanics and the
        Laidlaw Volcanics.
        The Laidlaw Volcanics underlie most of Cooleman Ridge to Mount Arawang and beyond to the south.
    </p>

    <p>Dr. John F. Lindsay</p>

    <h3 id="hills">Hills</h3>

    <p>
        Cooleman Ridge is blessed to have a series of significant hills. The reserve is distinctive among most other Canberra Nature Park Reserves in that instead of it being dominated by one large peak, it is instead a long flat ridge line that is comprised of a series of separate gently rolling hills.
    </p>

    <p>
        These hills are important because they provide some of the best views found in the Canberra urban area, including not only views of the city itself but also view to the west over the Murrumbidge Valley to the Bullen, Tidbinbilla and Brindabella ranges in the background.  Some of these hills have their own summit <a href="trails">trails</a> - Mt Arawang and Cooleman Trig.
    </p>

    <p>You can click on the markers in the map below to get more information about each of the hills found on the ridge.</p>

    <div id="hills-map" class="map"></div>

    <div>
        <a href="/maps/hills.kml">Export as KML file</a>
    </div>

    <h3 id="trails">Trails</h3>

    <p>
        The Cooleman Ridge Nature Reserve is lucky to be home to a wide variety of trails that are of local, regional and national significance.
    </p>

    <p>
        These trails serve a variety of purposes ranging from recreation (eg. walking, cycling, horse riding) to management (eg. weed spraying, fire control, etc).
    </p>

    <p>
        These trails play an important role for connecting the work of the group with the broader community through their recreational value.</p>

    <p>
        Please click on one of the coloured lines to obtain more information about the various trails found on the ridge.
    </p>

    <div id="trails-map" class="map"></div>

    <div>
        <a href="/maps/trails.kml">Export as KML file</a>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <script>
        let trailsMap;
        let hillsMap;

        function initMap() {

            var mapOptions = {
                zoom: 15,

                center: { lat: -35.361451, lng: 149.033615 },

                mapTypeId: google.maps.MapTypeId.SATELLITE
            };

            trailsMap = new google.maps.Map(document.getElementById('trails-map'), mapOptions);

            var trails = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/maps/trails.kml',

                map: trailsMap

            });

            hillsMap = new google.maps.Map(document.getElementById('hills-map'), mapOptions);

            var hills = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/maps/hills.kml',

                map: hillsMap

            });
        }
    </script>

</div>
<div class="col-sm-2">
    <div class="sticky-top">
        <div class="nav flex-column">
            <a href="#land" class="nav-link">Land</a>
            <a href="#location" class="nav-link">Location</a>
            <a href="#geology" class="nav-link">Geology</a>
            <a href="#hills" class="nav-link">Hills</a>
            <a href="#trails" class="nav-link">Trails</a>
        </div>
    </div>
</div>

<?php include 'googleapi.php'; ?>

<?php include 'footer.php'; ?>