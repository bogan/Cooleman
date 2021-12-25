<?php $title = 'About';	?>

<?php include 'header-new.php'; ?>

<h2>Plantations</h2>

<p>
    The Cooleman Ridge Nature Reserve has several large plantations that have been established on it.
</p>

<p>
    Some of these plantations were planted by the group, but some of them pre existed the formation of the group in 1991 and their origin is not known.
</p>

<p>
    The purpose of the plantations is varied. Some are believed to be created as windbreaks while others have been planted to replace the native tree cover that was originally removed as part of clearing the land.
</p>

<p>
    These plantations are made up of various trees - normally Eucalyptus and Acacia species.

    Some of the species are indigenous to the ridge, but some are not.
</p>

<!--p>
    The group performed many mass plantings in its early years.

    However, the focus of the group has steadily shifted away from planting to weeding partly because most areas have now been planted out but partly because the group believes that weeding is a more cost effective approach.
</p-->

<p>
    The plantations that were established by the group were done in the early yeats of the group, when the focus of the group was to plant new plants to quickly replace the native vegetation cover that had been lost through years of grazing and clearing.

    However, over the years as the tree cover has increased, the focus of the group has shifted focus from plantings to weeding. The group therefore does not create new plantations anymore.

    This is also inline with the groups <a href="strategy-new.php">strategy</a> about how to most effectively restore the ecology of the group.
</p>



<!--p>

    They also provide other benefits such as  suppressing weeds etc.

    Planting on the ridge is often more important as means to an end rather than an end itself.

    Plants are often effective weeders themselves because many weeds do no complete well with large trees such as eucalypts.

    Trees can be thought of weeders themselves.

    The best example of this approach has been on the summit of Mt Arawang which was the most damaged area on the ridge with huge infestations of <a href="weeds.php#beardedoats">Scotch Thistle</a>, <a href="weeds.php#beardedoats">Fleabane</a> and <a href="weeds.php#beardedoats">Bearded Oats</a>.

    Large plantings of ecucalypts and acacia were used to suppress these weeds and they have now largely eliminated the presence of these weeds over time.
</p-->



<p>Please click on a coloured area for more information about each plantation.</p>

<div id="plantationsmap" class="map"></div>

<script>
    let map;

    function initMap() {


        var mapOptions = {
            zoom: 15,

            center: { lat: -35.361451, lng: 149.033615 },

            mapTypeId: google.maps.MapTypeId.SATELLITE
        }

        map = new google.maps.Map(document.getElementById('plantationsmap'), mapOptions);

        var groups = new google.maps.KmlLayer({

            url: 'http://www.coolemanridge.org.au/maps/plantations.kml',

            map: map

        });
    }
</script>

<div>
    <a href="maps/plantations.kml">Export as KML file</a>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap&libraries=&v=weekly"></script>

<?php include 'footer-new.php'; ?>

