<?php
class Animal{

    // database connection and table name
    private $conn;

    // object properties
    public $id;
    public $category;
    public $sub_category;
    public $family;
    public $genus;
    public $species;
    public $common_name;
    public $native;
    public $frequency;
    public $newsletter;
    public $source;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    function read(){

        $query = "SELECT id, category, sub_category, family, genus, species, common_name, native, frequency, newsletter, source FROM animal";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}