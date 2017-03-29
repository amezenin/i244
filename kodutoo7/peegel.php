


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
	<title>Kodutöö 7</title>
  </head>
  <body>
 <?php
echo strrev("Hello world! \n");  

$text = "Tere";

function peegel ($text){
	echo $text[3];
	echo $text[2];
	echo $text[1];
	echo $text[0];
}

echo "asa \n a sas ";
peegel($text);


function peegel1($text){
    $textArray = str_split($text); // teeb stringist massiiv
    $n = count($textArray) - 1;
    for ($i = $n; $i > -1; $i--) {
       echo $textArray[$i];
    }
}
peegel1($text);
	
function peegel2($text)
{
	
     for ($i=0; $i < strlen($text); $i++) {
        $Uus = $text[$i];
    
		echo $Uus[$i-1];
		echo $Uus[$i-2];
		echo $Uus[$i-3];
	}
echo substr($text, 0, 1);
 
}

peegel2($text);



?>
	
  </body>
</html>