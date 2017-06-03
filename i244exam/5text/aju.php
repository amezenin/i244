<?php

  

	
	
	/*$userhash = $_COOKIE["userhash"]; // Узнаём, что за пользователь 
  if (!$userhash) {
    //Если это новый пользователь, то добавляем ему cookie, уникальные для него 
   $userhash = uniqid();
   
    setcookie("userhash",  0x6FFFFFFF);
	
 }*/
 
 
 
 if(!isset($_SESSION)){
	
	
	session_start();
	
		
		
		if($_POST['hinne']){
			$logfile = "text.txt";
			$a = $_POST['ranges'];
			file_put_contents($logfile, $a . PHP_EOL, FILE_APPEND);
			$data = file($logfile);
			$s = array_sum($data)/count(file($logfile)); 
			echo "Keskmine: ". round($s, 3); // print massiva
		
		
		}
		
		
		
/* $logfile = "text.txt";
			 //4itaem infu po strokam
		$lines = count(file($logfile)); //s4itaem skok strok 
  		echo "Sellel lehel on $lines külastust, sorterimata <br>";
		
		print_r ($data); // print massiva
		echo "<br>";
		//ubiraet povtorjajushiesja dannie iz massiva
		$result = array_unique($data);
		print_r($result);
		echo " Massiv bez povtorjajushihsja zna4enij <br>";
		$c = count($result); //skok strok v massive
  		echo "Sellel lehel on $c unikaalsed külastust ";*/
		
 
 }
		
	
	//loeme mitu rida on logis ja saama külastuste arvu.
  		
  		
			

		
 
	
	/*$logfile = "kylalised.txt";
	$ip = $_SERVER['REMOTE_ADDR'];
  
	$t = date('Y-m-d H:i:s') . " - " . $ip;
	file_put_contents($logfile, $t . PHP_EOL, FILE_APPEND);
	
		//$logfile = "kylalised.txt";
  		$data = file($logfile); // infa po strokam
		$c = count(file($logfile)); //skok strok
  		echo "Sellel lehel on $c külastust";*/
	
	


?>