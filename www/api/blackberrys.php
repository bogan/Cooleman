<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// query products
include '../blackberry-repository.php';
$num = $result->num_rows;

// check if more than 0 record found
if($num>0){

    // blackberrys array
    $blackberrys_arr=array();
    $blackberrys_arr["records"]=array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while($row = $result->fetch_assoc()) {

        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $blackberry_item=array(
            "id" => $id,
            "source" => $source,
            "easting" => $easting,
            "northing" => $northing,
            "latitude" => $latitude,
            "longitude" => $longitude,
            "size" => $size,
            "density" => $density,
            "health" => $health,
            "burnt" => $burnt,
            "comment" => $comment,
            "creation_date" => $creation_date,
            "last_updated_date" => $last_updated_date,
        );

        array_push($blackberrys_arr["records"], $blackberry_item);
    }

    echo json_encode($blackberrys_arr);
}

else{
    echo json_encode(
        array("message" => "No blackberrys found.")
    );
}
?>