<?php
$host = "127.0.0.1";
$user = "root";
$pass = "ghbdtn123";
$db = "fishcalc";


$l = mysqli_connect($host, $user, $pass, $db);
mysqli_query($l, "SET CHARACTER SET UTF8") or
		die("Error, ei saa andmebaasi charsetti seatud" );