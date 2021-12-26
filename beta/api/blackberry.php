<?php
class Blackberry{

    // database connection and table name
    private $conn;
    private $table_name = "products";

    // object properties
    public $id;
    public $source;
    public $easting;
    public $northing;
    public $latitude;
    public $longitude;
    public $size;
    public $density;
    public $health;
    public $burnt;
    public $comment;
    public $creation_date;
    public $last_updated_date;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read blackberries
    function read(){

        $query = "SELECT id, source, easting, northing, latitude, longitude, size, density, health, burnt, comment, creation_date, last_updated_date FROM blackberry";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}