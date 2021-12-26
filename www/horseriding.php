<?php $title = 'Horse Riding';	?>

<?php include 'header.php'; ?>

<h2>Horse Riding</h2>

<p class="tbc">To Be Completed</p>

<p>Click on an area for more information</p>



<div id="horseridingareas" style="width:750px;height:100px;"><div/>

<script>
    function initMap() {



        var horseridingareasmap = new google.maps.Map(document.getElementById('horseridingareas'), {

            zoom: 11,

        });



        var specialpurposes = new google.maps.KmlLayer({



            url: 'http://www.coolemanridge.org.au/maps/coolemanridge.kmz',



            map: horseridingareasmap



        });

    }

</script>

<?php include 'googleapi.php'; ?>

<?php include 'footer.php'; ?>

