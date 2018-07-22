<?php

include 'plantsrepository.php';

// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=plants.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('id', 'category', 'family', 'genus', 'species', 'common_name', 'native', 'frequency', 'newsletter', 'source'));

// loop over the rows, outputting them
while ($row = $result->fetch_assoc()) fputcsv($output, $row);

