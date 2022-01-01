<?php $title = 'Work';	?>

<?php include 'header.php'; ?>

<div class="col-sm-8">

    <h2 id="work">Work</h2>

    <p>
        This page provides a general overview of the work that the group does on the ridge.
    </p>

    <h3 id="activities">Activities</h3>

    <p>The group performs a wide variety of work activities including:

    <ul>

        <li>Weeding </li>

        <li>Planting </li>

        <li>Studying wildlife </li>

        <li>Reporting sightings of wildlife </li>

        <li>Hosting interest walks</li>

        <li>Surveying wildlife </li>

        <li>Monitoring wildlife </li>

        <li>Reducing fire fuel</li>

        <li>Compiling a herbarium of our plants </li>

        <li>Recording the ridge with photos</li>

    </ul>

    </p>

    <h3 id="group-areas">Group Areas</h3>

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
        The Group Areas were established shortly after the 2003 bushfires. The areas have each now been <a href="work">worked</a> on multiple times over the years and have shown major <a href="#achievements">improvements</a>, with some of the areas now being very close to their original state.
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

    <h3 id="achievements">Achievements</h3>

    <p>
        The group has undertaken various <a href="work">activities</a> over they years in support of its goal.
    </p>

    <p>
        The group now claims to have made significant improvements to the the ridge over the past 30 years, including the following:
    </p>

    <ul>
        <li>Reduced or eliminated many <a href="weeds">weeds</a>.</li>
        <li>Planted thousands of <a href="plantations">trees, shurbs, forbs and grasses</a>.</li>
        <li>Surveyed the ridges <a href="plant-survey">plants</a>, <a href="animal-survey">animals</a>, <a href="tree-survey">trees</a>, <a href="dam-survey">dams</a> and <a href="blackberry-survey">blackberries</a>.</li>
        <li>Developed various <a href="trails">nature trails</a> for educational purposes.</li>
        <li>Documented the <a href="history">history</a> of the ridge.</li>
        <li>Petitioned for better infrastructure on the ridge (eg. signage, fencing, roads, track improvements, foot bridges, etc).</li>
        <li>Liaised with various <a href="partners">government and non government agencies</a> to assist in the ongoing management of the ridge.</li>
    </ul>

    <h3 id="contribute">Contribute</h3>

    <p>The Cooleman Ridge Parkcare Group needs your help!</p>

    <p>
        The group is always looking for people to contribute to its work.
    </p>

    <p>
        We believe everybody can help the work the group does, no matter what their age, health, interest, skill-level or experience is.
    </p>

    <p>
        To contribute, you do not have to be a member or attend meetings.

        Nor do your contributions have to be regular, large or involve physical work.

        In fact, you don't even have to be on the ridge to help!

    </p>

    <p>
        Here are many other suggested ways for you to contribute the work of the group:
    </p>

    <ul>
        <li>Weeding when you are simply out enjoying the ridge</li>
        <li>Propagating plants for future planting on the ridge</li>
        <li>Writing an article for our monthly <a href="news">newsletter</a></li>
        <li>Reporting interesting sightings of plants and animals found on the ridge to <a target="_blank" href="http://canberra.naturemapr.org">Canberra Nature Map</a></li>
        <li>Taking photos and sharing them with the group</li>
        <li>Collecting rubbish from the ridge</li>
        <li>Sharing your specialist knowledge about the ridge</li>
        <li>Improving the web site content, structure or graphics</li>
        <li>Donating money to help fund the groups activities</li>
        <li>Anything else you can think of!</li>
    </ul>

    <p> Your contribution will help no matter what size, frequency or form it takes. Every little bit helps!</p>

    <p>If you would like to contribute to the group in some way, please <a href="contact">contact</a> us.</p>.

    <!--p>By making a contribution in one area (eg. newsletters) you free another member to do something that you can't or don't want to do (e.g weeding).</p-->

    <!--p>
        Many people help out while just 'doing something else' on the ridge like walking the dog.
    </p-->

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

</div>
<div class="col-sm-2">
    <div class="sticky-top">
        <div class="nav flex-column">
            <a href="#work" class="nav-link">Work</a>
            <a href="#activities" class="nav-link">Activities</a>
            <a href="#group-areas" class="nav-link">Group Areas</a>
            <a href="#achievements" class="nav-link">Achievements</a>
            <a href="#contribute" class="nav-link">Contribute</a>
        </div>
    </div>
</div>

<?php include 'googleapi.php'; ?>

<?php include 'footer.php'; ?>




