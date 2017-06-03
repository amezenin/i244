<?php

  
 $host="localhost";
  $user="root";
  $pass="ghbdtn123";
  $db="proov";
  $L = mysqli_connect($host, $user, $pass, $db) or die("ei saa mootoriga ühendust");
  mysqli_query($L, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($L));
	
	//viimane sisselogimine
	session_start();
	$last = isset($_COOKIE['last']) ? $_COOKIE['last'] : 'pole kunagi';
	setcookie('last', date('Y-m-d H:i:s'), time()+3600*24*31, '/');
	echo "Viimane kord te olite sisselogitud: " . $last;
	
  
  if($_POST['vii']){
		$ip = $_SERVER["REMOTE_ADDR"]; // Получаем ип
		$aeg = date('Y-m-d H:i:s');
		$sql = "INSERT INTO amezenin_vii (ip, aeg) VALUES ('$ip', '$aeg')";
		$result= mysqli_query($L, $sql);
		
		$t = mysqli_query($L, "SELECT aeg FROM amezenin_vii WHERE ip='$ip';");
		printf("<br> Te kylastate koduleht %d korda.\n <br>", mysqli_num_rows($t));
		while($row = mysqli_fetch_array($t)){
			
			echo "<br> Visiitide log: ".$row['aeg'] ."\n";
			
			
		}
		
		

	  
  }
  
  
  
  
  
  /*$mysqli->query("INSERT INTO amezenin_kul (ip) VALUES ( '$ip')"); // Добавляем запись
  $mysqli->close(); // Закрываем соединение*/
	
	//берём всё данные из таблицы и пробегаемся по строкам
		/*$res = mysqli_query($L, "SELECT * FROM amezenin_ip");
		while($row = mysqli_fetch_array($res))
				{
		//echo "ID: ".$row['id']."<br>\n"; вывести строки из столбца id
		
			echo "<br> id: ".$row['id']."\n";
		echo "ip: ".$row['ip']."\n"; //вывести строки из столбца текст
		
		
	
				}*/
				
				/*$res = mysqli_query($L, "SELECT li, COUNT(li) AS 'Num' FROM amezenin_like GROUP BY li;");
				
				while($row = mysqli_fetch_array($res))
				{
		//echo "ID: ".$row['id']."<br>\n"; вывести строки из столбца id
		
			//echo "<br> id: ".$row['id']."\n";
		//echo "<br> Likes: ".$row['li']."\n"; //вывести строки из столбца текст
		echo "Likede arv: ".$row['Num']."\n"; //вывести количество строк
		
	
				}*/


?>