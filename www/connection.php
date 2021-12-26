<?php

$servername = "localhost";
$db_name="cooleman_db";
$db_username = getenv('COOLEMAN_DB_USERNAME');
$db_password = getenv('COOLEMAN_DB_PASSWORD');

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}