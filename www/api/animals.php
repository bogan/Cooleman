<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include '../animal-repository.php';
$num = $result->num_rows;

// check if more than 0 record found
if($num>0){

    // animals array
    $animals_arr=array();
    $animals_arr["data"]=array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            extract($row);

            $animal_item=array(
                "id" => $id,
                "category" => $category,
                "sub_category" => $sub_category,
                "family" => $family,
                "genus" => $genus,
                "species" => $species,
                "common_name" => $common_name,
                "native" => $native,
                "newsletter" => $newsletter,
                "frequency" => $frequency,
                "source" => $source,
            );

            array_push($animals_arr["data"], $animal_item);
        }
    } else {
        echo "0 results";
    }

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    //while ($row = $result->fetch_assoc()()){
        // extract row
        // this will make $row['name'] to
        // just $name only
//        extract($row);
//
//        $animal_item=array(
//            "id" => $id,
//            "category" => $category,
//            "sub_category" => $sub_category,
//            "family" => $family,
//            "genus" => $genus,
//            "species" => $species,
//            "common_name" => $common_name,
//            "native" => $native,
//            "newsletter" => $newsletter,
//            "frequency" => $frequency,
//            "source" => $source,
//        );
//
//        array_push($animals_arr["data"], $animal_item);
    //}

    echo json_encode($animals_arr);
}

else{
    echo json_encode(
        array("message" => "No animals found.")
    );
}
?>