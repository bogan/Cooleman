<?php $title = 'About';	?><?php include 'header-new.php'; ?><h2>Hills</h2><p>    Cooleman Ridge is blessed to have a series of significant hills. The reserve is distinctive among most other Canberra Nature Park Reserves in that instead of it being dominated by one large peak, it is instead a long flat ridge line that is comprised of a series of separate gently rolling hills.</p><p>    These hills are important because they provide some of the best views found in the Canberra urban area, including not only views of the city itself but also view to the west over the Murrumbidge Valley to the Bullen, Tidbinbilla and Brindabella ranges in the background.  Some of these hills have their own summit <a href="trails-new.php">trails</a> - Mt Arawang and Cooleman Trig.</p><p>You can click on the markers in the map below to get more information about each of the hills found on the ridge.</p><div id="hillsmap" class="map"></div><script>    let map;    function initMap() {        var mapOptions = {            zoom: 15,            center: { lat: -35.361451, lng: 149.033615 },            mapTypeId: google.maps.MapTypeId.SATELLITE        }        map = new google.maps.Map(document.getElementById('hillsmap'), mapOptions);        var groups = new google.maps.KmlLayer({            url: 'http://www.coolemanridge.org.au/maps/hills.kml',            map: map        });    }</script><div>    <a href="maps/hills.kml">Export as KML file</a></div><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap&libraries=&v=weekly"></script><?php include 'footer-new.php'; ?>