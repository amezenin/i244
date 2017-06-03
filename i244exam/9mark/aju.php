<?php

setcookie("note", $_POST['comment'], time() + (86400 * 30), "/"); // 86400 = 1 day	
	
	if($_POST['Lisa']){
		$a = $_POST['text'];
		$date = date("Y-m-d H:i:s");
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