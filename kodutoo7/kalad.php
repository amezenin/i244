<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kalad</title>
</head>
<body>


<?php
$kalad= array( 
		array('nimi'=>'Gena', 'vanus'=>2, "liik"=>"siberi tuur",  "hobby"=>"Huppab bassinist valja", "pilt"=>"images.jpeg" ), 
		array('nimi'=>'Tom', 'vanus'=>1, "liik"=>"siberi tuur",  "hobby"=>"Neelab ohumullid", "pilt"=>"sturgeon.jpg" ),
		array('nimi'=>'Afanasij', 'vanus'=>2, "liik"=>"vene tuur",  "hobby"=>"Soob surnud kalad", "pilt"=>"sturgeon.jpg" ),
		array('nimi'=>'Ivan Petrovits', 'vanus'=>6, "liik"=>"siberi tuur",  "hobby"=>"Lammab basseini pohjal", "pilt"=>"images.jpeg" ),
	);
	
	foreach ($kalad as $kala) {
		include "kala.html";
	}
?>

</body>
</html>