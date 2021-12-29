<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// query products
include '../plant-repository.php';
$num = $result->num_rows;

// check if more than 0 record found
if($num>0){

    // plants array
    $plants_arr=array();
    $plants_arr["data"]=array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while($row = $result->fetch_assoc()) {
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $plant_item=array(
            "id" => $id,
            "category" => $category,
            "family" => $family,
            "genus" => $genus,
            "species" => $species,
            "common_name" => $common_name,
            "native" => $native,
            "newsletter" => $newsletter,
            "frequency" => $frequency,
            "source" => $source,
        );

        array_push($plants_arr["data"], $plant_item);
    }

    echo json_encode($plants_arr);
}

else{
    echo json_encode(
        array("message" => "No plants found.")
    );
}
?>