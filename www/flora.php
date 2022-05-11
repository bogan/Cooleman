<?php $title = 'Flora';	?>

<?php include 'header.php'; ?>

<div class="col-sm-8">

    <h2 id="flora">Flora</h2>

    <p>The vegetation of Cooleman Ridge consists mostly of open grasslands with intermittent patches of woodland. There
        is a surprisingly diverse range of flora especially considering that 30 years ago it was a sheep paddock.</p>

    <p>Most of the trees have been planted since the reserve was established in 1991, but there are quite a few mature
        trees, which are presumed to be pre-1990 including Eucalyptus nortonii, E. polyanthemus, E. melliodora and
        kurrajong. At certain times of the year, various native grasses can be seen covering large patches and the many
        species of acacia exhibit their yellow blooms.</p>

    <p>The Cooleman Ridge Park Care Group maintains an updated list of native and exotic species of plants that can be
        found on the Ridge.
        Please see the <a href="plant-survey.php">Plant List</a> page for a complete list of identified species. Please note that you can vary your
        options on the <a href="plant-survey.php">Plant List</a> and bring up more or less information.</p>

    <p>The following list is some of the more common or easily identified native species found on the ridge.</p>

    <h3 id="identification">Identification</h3>

    <p>Recently, the Group has used special apps to record where species can be found. These apps include Canberra
        Nature Map and Collector.</p>

    <p>Useful Flora identification links:</p>

    <p>Tree species guides which were collated by the Group for the species found on the Ridge. </p>
    <p><a href="#">Tree Notes and Eucalyptus Key pages.</a></p>
    <p><a href="https://plantnet.rbgsyd.nsw.gov.au/">Plantnet</a></p>
    <p><a href="http://canberra.naturemapr.org.au">Canberra Nature Map</a></p>

    <h3 id="plantings">Plantings</h3>

    <p>Cooleman Ridge has a number of areas that have been planted with native species to provide a varied habitat, and
        protection of vulnerable species.</p>

    <p>Most of these areas were planted by the group in the decade after 1991, but some of them existed before the
        formation of the Group and their origin is unknown. The purpose of the plantings is varied. Some have been
        planted as wind-breaks, and others to replace the native tree cover that had been removed.</p>

    <p>The plantings are made up of various Australian trees, some indigenous to the local area, some not. Some of the
        plantings have included ground cover (Hardenbergia) and bushes (Bursaria).</p>

    <p>Please click on a coloured area in the map below for more information.</p>

    <div id="plantations-map" class="map"></div>

    <script>
        let map;

        function initMap() {

            var mapOptions = {
                zoom: 15,

                center: { lat: -35.361451, lng: 149.033615 },

                mapTypeId: google.maps.MapTypeId.SATELLITE
            };

            map = new google.maps.Map(document.getElementById('plantations-map'), mapOptions);

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/maps/plantations.kml',

                map: map

            });
        }
    </script>

    <div>
        <a href="/maps/plantations.kml">Export as KML file</a>
    </div>

    <h3 id="weeds">Weeds</h3>

    <p>Intruding into this native diversity are introduced plants, some of which are invasive and some taking on plague
        proportions in some areas at particular times. Weeds and weeding are the central focus of the Group to
        regenerate the native flora.</p>

    <p>The definition of a weed is contentious, however in this context it is “any plant that was not present prior to
        European settlement”. To prevent our group being over-whelmed by the weedy growth, they focus on the plants that
        are invasive and which suppress the overall growth of native species. Additionally we target specific areas of
        the Ridge.</p>

    <p>The most significant factor in the history of weeds has been the presence of grazing on the Ridge. This is
        because land management in the past encouraged:
    </p>

    <ul>
        <li>Introduction of pasture grasses (phalaris, fescue, rye grass)</li>
        <li>Fertilisation (superphospate which kills native plants)</li>
        <li>Clearing of native tree cover</li>
        <li>Over-grazing which affected the softer native grasses</li>
        <li>Over-grazing which exposed the soil and led to erosion and the germination of weeds</li>
        <li>Introduction of weed-seeds through vehicles and animals</li>
    </ul>

    <p>There are some areas of the Ridge which have better native cover than others. These are areas that would not have
        been heavily grazed, mostly the northern aspects. You can still notice that on the high, western-facing hills,
        there are the remnants of “sheep-camps” where sheep rested, and these areas under the trees are covered in
        invasive weed species.</p>

    <p>In recent years the weeds that have been targetted have included African Lovegrass, St Johns Wort, blackberry,
        Briar rose, Pattersons curse, verbascum, mustard weed, wild oats, serrated tussock and wild sage. There have
        been other species causing problems over the years but the effective work of the Group has reduced the incidence
        of these weeds.</p>

    <p>The group uses the Collector app to notify the Parks and Conservation weeds officer where weeds have been found,
        and to also map any weed management on the ridge. Collector can also be used to map rabbit warrens.</p>

    <p>For a short list with photos of weeds on the Ridge, go to Types of Weeds</p>

    <h3 id="links">Links</h3>

    <p>For Weeding Methods used on the Ridge click
        <here>
    </p>

    <p>For <a href="https://canberra.naturemapr.org/Species/Lists/3">Weeds in the ACT</a></p>

    <p>For a local <a href="https://www.iconwater.com.au/~/media/files/icon-water/environment/appendix-a-weed-management-sub-plan.pdf?la=en">Weed Management Plan</a></p>

    <p>General Weed info: <a href="https://www.dpi.nsw.gov.au/biosecurity/weeds">https://www.dpi.nsw.gov.au/biosecurity/weeds</a></p>

    <p>Local weed info: <a href="https://molonglo.org.au/Information/Weeds">https://molonglo.org.au/Information/Weeds</a></p>

    <p>Calendar of when to treat weeds:
        <a href="https://molonglo.org.au/sites/default/files/Fact sheets/Weeds/04 ControlCalendar.pdf">https://molonglo.org.au/sites/default/files/Fact%20sheets/Weeds/04%20ControlCalendar.pdf</a></p>

    <p><a href="https://www.anbg.gov.au/weeds/">Australian Weeds</a></p>

    <h3 id="monitoring">Monitoring</h3>

    <p>Since the Cooleman Park Care Group was established in 1991, the Group has conducted the following surveys:
    </p>

    <ul>
        <li>Tree Surveys in 1997, 2005, 2009, 2013
        </li`>
        <li>Blackberry Surveys in 2016 and 2017</li>
        <li>A survey following a prescribed burn in 2009.</li>
    </ul>

    <p>More recently the Group has been involved in Vegwatch, which has involved monitoring 2 sites on the ridge yearly
        since 2016.</p>

    <p><a href="tree-survey.php">Tree Survey</a></p>
    <p><a href="blackberry-survey.php">Blackberry Survey</a></p>
    <p><a href="#">Kathner St Regeneration Survey</a></p>
    <p><a href="https://www.molonglo.org.au/act-vegwatch">Vegwatch</a></p>
    
    <P></P>
    <p></p>

</div>
<div class="col-sm-2">
    <div class="sticky-top">
        <div class="nav flex-column">
            <a href="#flora" class="nav-link">Flora</a>
            <a href="#identification" class="nav-link">Identification</a>
            <a href="#plantings" class="nav-link">Plantings</a>
            <a href="#weeds" class="nav-link">Weeds</a>
            <a href="#links" class="nav-link">Links</a>
            <a href="#monitoring" class="nav-link">Monitoring</a>
        </div>
    </div>
</div>

<?php include 'googleapi.php'; ?>

<?php include 'footer.php'; ?>