<?php

 
// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
		
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('Column 1', 'Column 2', 'Column 3', 'Column 4', 'Column 5' ), ';'); // default oli koma

// fetch the data
//mysqli_connect('127.0.0.1', 'root', 'ghbdtn123');
//mysqli_select_db('fishcalc');
$rows = mysqli_query($l,'SELECT sooda_id, sooda_paev, sooda_biomass, sooda_kogus, sooda_kasv FROM sooda_andmed');


function encloseAll($value) {
	return '="'.$value.'"'; // preobrazovali v formulu 4tob excel ne preobrazovival 4isla v dati
}

// loop over the rows, outputting them
while ($row = mysqli_fetch_assoc($rows)){
	fputcsv($output, array_map(encloseAll, $row), ';'); // k kazdomu zna4eniju v stroke primenjaem formulu 
}	

	
?> 