<?php $title = 'Walks';	?><?php include 'header.php'; ?><h2>Walks</h2>Cooleman Ridge has many nice walks. Here is a list of some of the best walks on the ridge that the group recommends.<h3>Mt Arawang Loop (35 minutes)</h3><p> This walk circumnavigates the highest peak on Cooleman Ridge.</p><ol>    <li>Proceed out from Lincoln Place up to the vehicle track and go left.</li>    <li>Follow this track around the base of Mt Arawang on your right.</li>    <li>Pass a bridge and the Mt Arawang Summit Trail sign on your right and continue westward on the trail.</li>    <li>Go right across the culvert then proceed steeply uphill still on the vehicle track.</li>    <li>At the saddle you could detour right to ascend Mt Arawang (15 min return, great views), or continue straight ahead down to the bridge which crosses the cutoff drain, and back to Lincoln Close.</li></ol><h3>Cooleman Ridge Reserve Loop (2 hours 30 minutes return)</h3><p>    This walk starts at Kathner St and proceeds all the way around the Ridge including Mt Arawang.</p><ol>    <li>Proceed out from the end of Kathner St on the right hand trail.</li>    <li>Take the right fork to pass a dam on your left.</li>    <li>Follow the wide Bicentennial National Trail (BNT) as indicated by the Cooleman Ridge BNT signs all the way along the side of the Ridge.</li>    <li>You will pass a number of dams on the way. Ignore the McQuoids Hill BNT on your right and continue on.</li>    <li>When you come to some horse troughs after about an hour, go left on the Mt Arawang Saddle FT (fire trail) through a gate.</li>    <li>Proceed uphill a short way then go right on a narrow track. Follow this track downhill and across a bridge to a gravel fire trail.</li>    <li>Go left on the Cutoff Drain FT.</li>    <li>Follow this trail all the way around Mt Arawang and along the side of Cooleman Ridge overlooking Canberra on your right.</li>    <li>On the way you will pass steps on your left going up to the Mt Arawang Trig (10 mins) and later the Cooleman Trig (5 minutes).</li>    <li>When you come to the Kathner St Access sign go right downhill and back to Kathner St. Be careful on this part of the trail as it is steep and slippery.</li></ol><h3>The Ridge Line Loop (2 hours 10 minutes return)</h3><p>    This walk focuses on following the main ridge line of Cooleman Ridge.</p><ol>    <li>From the southern end of Mt Arawang, climb up the summit trail to the Trig.</li>    <li>Go left from the Trig downhill.</li>    <li>Proceed straight ahead through a gate and pass two tracks on your left.</li>    <li>Go left at the crossroads uphill. Go right on a narrow track (part of the Centenary Trail) to pass the reservoir on your left.</li>    <li>Continue downhill then across a saddle. Cross over a trail and veer around to your right.</li>    <li>Cross over another track and proceed gently uphill past a reservoir on your left.</li>    <li>Take the left fork and follow the track as it winds up to the 25th Anniversary Seat.</li>    <li>Linger to admire the views then continue downhill. Cross over another track and proceed uphill.</li>    <li>Pass a track going up to the Trig on your right. A detour to the trig takes just two minutes return.</li>    <li>Continue along the spine of the Ridge until you come to a step through gate ahead.</li>    <li>Go through the gate and turn right.</li>    <li>Follow the track down to Kathner St passing a track going off to your right and another to your left.</li>    <li>Return by the same route.</li></ol><h3>Panorama Walk to the Anniversary Seat (20 minutes)</h3><p>    This walk is designed to take advantage of the best views available on the ridge.</p><ol><li>Proceed up from Darrell Pl and through a step through gate.</li><li>Go right at the reservoir and continue uphill.</li><li>Take the left fork and follow the track as it winds uphill to the Anniversary Seat on your right.</li><li>This seat was installed to commemorate the 25th anniversary of the Cooleman Ridge Park Care Group.</li><li>Linger awhile to admire the panoramic view.</li><li>Continue down the track to a gate on your right.</li><li>Go through the gate and turn right on the main trail.</li><li>Pass the large rock pillar (Sentry Box) on your left and continue downhill back to Darrell Pl.</li></ol><p>The following map displays the route of the above walks. You can click on a coloured area for more information about each walk.</p><div id="walksmap" style="height: 600px" class="map"></div><script>    let map;    function initMap() {        var mapOptions = {            zoom: 15,            center: { lat: -35.361451, lng: 149.033615 },            mapTypeId: google.maps.MapTypeId.SATELLITE        }        map = new google.maps.Map(document.getElementById('walksmap'), mapOptions);        var groups = new google.maps.KmlLayer({            url: 'http://www.coolemanridge.org.au/maps/walks.kmz',            map: map        });    }</script><div>    <a href="maps/walks.kmz">Export as KML file</a></div><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap&libraries=&v=weekly"></script><?php include 'footer.php'; ?>