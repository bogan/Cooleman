<?php
$api_key = getenv('COOLEMAN_GOOGLE_API_KEY');
echo "<script src='https://maps.googleapis.com/maps/api/js?key={$api_key}&callback=initMap&libraries=&v=weekly'></script>";
?>