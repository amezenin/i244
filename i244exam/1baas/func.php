<?php
function connect(){
  global $L;
  $host="localhost";
  $user="test";
  $pass="t3st3r123";
  $db="test";
  $L = mysqli_connect($host, $user, $pass, $db) or die("ei saa mootoriga ühendust");
  mysqli_query($L, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($L));
}

function salvesta(){
	global $L;
	
	if ($_POST) {
	$a = $_POST['text'];
		if($_POST ['vichislit']){
				$t = mysqli_real_escape_string($L, $a);
    			$sql = "INSERT INTO amezenin_text (text) VALUES ( $a))";
    			$result= mysqli_query($L, $sql);
			
			echo $result;
		}
	
	}
	
	
	
}

?>