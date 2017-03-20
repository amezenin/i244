<?php

			$host = "127.0.0.1";
			$user = "root";
			$pass = "root";
			$db = "test";
		

			$l = mysqli_connect($host, $user, $pass, $db);
			mysqli_query($l, "SET CHARACTER SET UTF8") or
					die("Error, ei saa andmebaasi charsetti seatud" );

if ($_POST['salvesta']){
	// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
		
		// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('Column 1', 'Column 2', 'Column 3', 'Column 4', 'Column 5' ));

// fetch the data
mysql_connect('127.0.0.1', 'root', 'root');
mysql_select_db('test');
$rows = mysql_query('SELECT sooda_paev, sooda_biomass, sooda_kogus, sooda_kasv FROM sooda_andmed');

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
		
		
	}
	
?> 