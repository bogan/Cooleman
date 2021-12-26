<?php

include 'connection.php';

$sql = "SELECT id, 
                category, 
                sub_category, 
                family, 
                genus, 
                species, 
                common_name, 
                native, 
                frequency, 
                newsletter, 
                source 
        FROM animal";

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