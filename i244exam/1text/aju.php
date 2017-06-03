<?php

 

	
	if ($_POST) {
	$a = $_POST['text'];
		
		if($_POST ['vichislit']){
				//if(!isset($_SESSION)) session_start();
				
				//logime IP ja aja logifaili, text ka
				
		
		
		$logfile = "text.txt";
		$ip = $_SERVER['REMOTE_ADDR'];
		$line = date('Y-m-d H:i:s') . " - " .  $ip . " - " . $a;	
		file_put_contents($logfile, $line . PHP_EOL, FILE_APPEND);
		
		}
			
		
		
		if($_POST ['kuva']){
		//loeme mitu rida on logis ja saama külastuste arvu.
  		$logfile = "text.txt";
		$data = file($logfile); //4itaem infu po strokam
		$i = 1;
 
# В цикле обходим массив данных
foreach( $data as $value ):
 
# Разбиваем строку по |
$value = explode( "|", $value );
 
echo '<table border="1">';
{
echo '<tr>';
echo '<td>' . $i++ . '</td>';
echo '<td>' . $value[0] . '</td>';

echo '</tr>';
}
echo '</table>';
endforeach;
  		$lines = count(file($logfile));
  		echo "Sellel lehel on  $lines  külastust";
		
		}

		
		
		}
	
	
	
	


?>