<?php $title = 'Horse Riding';	?>

<?php include 'header-new.php'; ?>

<h2>Horse Riding</h2>

<p class="tbc">To Be Completed</p>

<p>Click on an area for more information</p>



<div id="specialpurposeareas" style="width:750px;height:100px;"><div/>



    <script>
        function initMap() {



            var specialpurposeareasmap = new google.maps.Map(document.getElementById('specialpurposeareas'), {

                zoom: 11,

            });



            var specialpurposes = new google.maps.KmlLayer({



                url: 'http://www.coolemanridge.org.au/maps/coolemanridge.kmz',



                map: specialpurposeareasmap



            });

        }



    </script>

    <script async="" defer=""

            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap">

    </script>

<?php include 'footer-new.php'; ?>

