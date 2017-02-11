<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css"  />
    <meta charset="utf-8"/>
	<title>Koduleht</title>
	
  </head>
  <body>
  <h1>Proov</h1>
    <p>Tere mina olen Anton</p>
	<a href="https://wiki.itcollege.ee/index.php/I253_Informatika_eelkursus">Wiki IT</a>
    <p></p>
	<!-- Need kaks on cloudfront serverist -->
    <p><img src="pictures/acistus.jpg" alt="Kala"/></p>
 <p><img src="pictures/acistus1.jpg" alt="Kala"/></p>
 <p><img src="pictures/acistus2.jpg" alt="Kala"/></p>
    <!-- Need neli on enose serverist -->
    <img src="http://enos.itcollege.ee/~amezenin/pictures/acistus.jpg" alt="Kala"/>
    <img src="//enos.itcollege.ee/~amezenin/pictures/acistus2.jpg" alt="Kala"/>
    <img src="/~amezenin/pictures/acistus2.jpg" alt="Kala"/>
	
<?php
  $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
			
			
   
    mysqli_close($l);
	

 echo phpversion();

?>

  </body>
</html>