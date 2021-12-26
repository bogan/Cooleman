<?php

include 'connection.php';

//$sql = "SELECT id, source, easting, northing, latitude, longitude, size, density, health, burnt, comment, creation_date, last_updated_date FROM blackberry";
$sql = "SELECT id, category, family, genus, species, common_name, native, frequency, newsletter, source FROM plant";

$result = $conn->query($sql);

if ($result)
{
	//echo "OK";
}
else
{
	die(mysqli_error($conn));
}
$conn->close();

?>