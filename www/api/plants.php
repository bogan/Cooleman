<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once 'database.php';
include_once 'plant.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$plant = new Plant($db);

// query products
$stmt = $plant->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // plants array
    $plants_arr=array();
    $plants_arr["records"]=array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
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

        array_push($plants_arr["records"], $plant_item);
    }

    echo json_encode($plants_arr);
}

else{
    echo json_encode(
        array("message" => "No plants found.")
    );
}
?>