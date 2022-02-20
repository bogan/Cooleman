<?php $title = 'Walks';	?>

<?php include 'header.php'; ?>

<div class="col-sm-8">

    <h2 id="activities">Activities</h2>

    <p>Cooleman Ridge is a delightful place for walking, cycling, horse riding and admiring views of Canberra on one side and the Bullen, Tidbinbilla and Brindabella ranges on the other.</p>


    <h3 id="walking">Walking</h3>

    <p>Cooleman Ridge has many nice walks. Here is a list of some of the best walks on the ridge that the group
        recommends.</p>

    <p>Five suggested walks with specific directions are listed below. Each walk is also displayed on the map at the
        bottom using the specific colour mentioned in the walk description.</p>

    <h4 id="mtarawangloop">Mt Arawang Loop</h4>

    <p><strong>Duration: 35 mins</strong><br>
        <strong>Colour: Green</strong>&nbsp;<span id="green" class="walk-info">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

    <p>Proceed out from Lincoln Place up to the vehicle track and go left. Follow this track around the base of Mt
        Arawang on your right. Pass a bridge and the Mt Arawang Summit Trail sign on your right and continue westward on
        the trail. Go right, crossing the culvert then proceed steeply uphill still on the vehicle track. At the saddle
        you could detour right to ascend Mt Arawang (15 min return, great views), or continue straight ahead down to the
        bridge which crosses the cutoff drain, and back to Lincoln Close.</p>

    <h4 id="coolemanridgereserveloop">Cooleman Ridge Loop</h4>

    <p><strong>Duration: 2 hours 30 minutes return</strong><br>
        <strong>Colour: Yellow</strong>&nbsp;<span id="yellow" class="walk-info">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

    <p>This walk starts at Kathner St and proceeds all the way around the Ridge including Mt Arawang. Proceed out from
        the end of Kathner St on the right hand trail. Take the right fork to pass a dam on your left. Follow the wide
        Bicentennial National Trail (BNT) as indicated by the Cooleman Ridge BNT signs all the way along the side of the
        Ridge. You will pass a number of dams on the way. Ignore the McQuoids Hill BNT on your right and continue on.
        When you come to some horse troughs after about an hour, go left on the Mt Arawang Saddle FT (fire trail)
        through a gate. Proceed uphill a short way then go right on a track. Follow this track downhill and across a
        bridge to a gravel fire trail. Go left on the Cutoff Drain FT. Follow this trail all the way around Mt Arawang
        and along the northern side of Cooleman Ridge overlooking Canberra on your right. On the way you will pass steps
        on your left going up to the Mt Arawang Trig (10 mins) and later the Cooleman Trig (10 mins). When you come to
        the Kathner St Access sign go right downhill and back to Kathner St. Be careful on this part of the trail as it
        is steep and slippery. To avoid this turn onto the narrow loop trail.</p>

    <h4 id="nature-trail">Nature Trail near Kathner St</h4>

    <p><strong>Duration: 10 mins</strong><br>
        <strong>Colour: Purple</strong>&nbsp;<span id="purple" class="walk-info">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

    <p>Proceed through the gate on the left hand side of the end of Kathner St. A short way up the fire trail go right at the Nature Trail sign.</p>

    <h4 id="ridgeline-loop">The Ridge Line Loop</h4>

    <p><strong>Duration: 2 hours 10 minutes</strong><br>
        <strong>Colour: Blue</strong>&nbsp;<span id="blue" class="walk-info">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

    <p>From the southern end of Mt Arawang, climb up the summit trail to the Trig. Go left from the Trig downhill.
        Proceed straight ahead through a gate and pass two tracks on your left. Go left uphill to follow the Centenary
        Trail. Go right on a narrow track (part of the Centenary Trail) to pass the reservoir on your left.</p>
    
    <h4 id="panorama-walk">Panorama Walk</h4>

    <p><strong>Duration: 20 minutes</strong><br>
        <strong>Colour: Red</strong>&nbsp;<span id="red" class="walk-info">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

    <p>Proceed up from Darrell Pl and through a step through gate. Go right at the reservoir and continue uphill. Take
        the left fork and follow the track as it winds uphill to the Anniversary Seat on your right. This seat was
        installed to commemorate the 25th anniversary of the Cooleman Ridge Park Care Group. Linger awhile to admire the
        panoramic view. Continue down the track to a gate on your right. Go through the gate and turn right on the main
        trail. Pass the large rock pillar (Sentry Box) on your left and continue downhill back to Darrell Pl.</p>

    <h4 id="cooleman-trig">Cooleman Trig Trail</h4>

    <p><strong>Duration: allow one to two hours</strong><br>
        <strong>Colour: Pink</strong>&nbsp;<span id="pink" class="walk-info">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

    <p>This walk proceeds from the northern end of the Ridge at Kathner St up to Cooleman Trig and return. Details,
        including a map, can be found in a brochure which is available in boxes at Kathner St and the bottom of the
        Trig.</p>

    <p>The following map displays the route of the above walks. You can click on a coloured area for more information about each walk.</p>

    <div id="walks-map" style="height: 600px" class="map"></div>

    <script>
        let map;

        function initMap() {


            var mapOptions = {
                zoom: 15,

                center: { lat: -35.361451, lng: 149.033615 },

                mapTypeId: google.maps.MapTypeId.SATELLITE
            };

            map = new google.maps.Map(document.getElementById('walks-map'), mapOptions);

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/maps/walks.kmz?foo=1',

                map: map

            });
        }
    </script>

    <div>
        <a href="/maps/walks.kmz">Export as KML file</a>
    </div>

    <br>

    <h3 id="cycling">Cycling</h3>

    <p>The <a href="https://www.environment.act.gov.au/parks-conservation/parks-and-reserves/find-a-park/rural/canberra-centenary-trail">Centenary Trail</a> runs over Cooleman Ridge and is a good route for bike riders.</p>

    <h3 id="birdwatching">Birdwatching</h3>

    <p class="tbc">To Be Completed</p>

    <h3 id="horseriding">Horseriding</h3>

    <p>Horse riders can access the Ridge from Kathner St at the northern end, and through the horse paddocks near Mt Arawang at the southern end. The only route available to horse riders on Cooleman Ridge is along the Bicentennial National Trail (BNT). The BNT was established for horse riders in 1988 and runs from Healesville in Victoria to Cooktown in Queensland.</p>

    <p>Horse riding is not permitted on the other walking/cycling tracks on the Ridge.</p>

    <h3 id="contemplating">Contemplating</h3>

    <p>The views from the Ridge are arguably the best in Canberra. The lightly timbered hills and saddles of the Ridge form an attractive part of the backdrop to the city.</p>

    <p>There are two trig points (Mt Arawang and Cooleman) which afford splendid views as well as the 25th Anniversary Seat.</p>

    <p>There are also seats at the Kathner St Dam and the Old Dam.</p>

    <p>These are ideal spots for viewing and listening to wildlife and just contemplating nature.</p>


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

</div>
<div class="col-sm-2">
    <div class="sticky-top">
        <div class="nav flex-column">
            <a href="#activities" class="nav-link">Activities</a>
            <a href="#walking" class="nav-link">Walking</a>
            <a href="#cycling" class="nav-link">Cycling</a>
            <a href="#birdwatching" class="nav-link">Birdwatching</a>
            <a href="#horse-riding" class="nav-link">Horseriding</a>
            <a href="#contemplating" class="nav-link">Contemplating</a>
        </div>
    </div>
</div>

<?php include 'googleapi.php'; ?>

<?php include 'footer.php'; ?>

