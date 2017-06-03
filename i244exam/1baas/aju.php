<?php

  
 $host="localhost";
  $user="root";
  $pass="ghbdtn123";
  $db="proov";
  $L = mysqli_connect($host, $user, $pass, $db) or die("ei saa mootoriga ühendust");
  mysqli_query($L, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($L));

	
	if ($_POST) {
	$a = $_POST['text'];
		if($_POST ['vichislit']){
				$date = date("Y-m-d H:i:s");
				$t = mysqli_real_escape_string($L, $a);
    			$sql = "INSERT INTO amezenin_text2 (text, date) VALUES ('$t', '$date')";
    			$result= mysqli_query($L, $sql);
			
			
		}
		
		if($_POST ['kuva']){
		$t = mysqli_query($L, "SELECT * FROM amezenin_text2");
		//количество строк
		printf("Select вернул %d строк.\n", mysqli_num_rows($t));
		
		//берём всё данные из таблицы и пробегаемся по строкам
		$res = mysqli_query($L, "SELECT * FROM amezenin_text2");
		while($row = mysqli_fetch_array($res))
				{
		//echo "ID: ".$row['id']."<br>\n"; вывести строки из столбца id
		echo "<br> date: ".$row['date']."\n";
		echo "text: ".$row['text']."\n"; //вывести строки из столбца текст
		
		}

		
		
		}
	
	}
	
	
	


?>