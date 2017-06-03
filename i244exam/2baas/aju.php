<?php

  
 $host="localhost";
  $user="root";
  $pass="ghbdtn123";
  $db="proov";
  $L = mysqli_connect($host, $user, $pass, $db) or die("ei saa mootoriga ühendust");
  mysqli_query($L, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($L));

	$userhash = $_COOKIE["userhash"]; // Узнаём, что за пользователь
  if (!$userhash) {
    /* Если это новый пользователь, то добавляем ему cookie, уникальные для него */
    $userhash = uniqid();
    setcookie("userhash", $userhash, 0x6FFFFFFF);
  }
  $ip = $_SERVER["REMOTE_ADDR"]; // Получаем ип
  
  $sql = "INSERT INTO amezenin_kul (ip) VALUES ('$ip')";
  $result= mysqli_query($L, $sql);
  
  /*$mysqli->query("INSERT INTO amezenin_kul (ip) VALUES ( '$ip')"); // Добавляем запись
  $mysqli->close(); // Закрываем соединение*/
	
	$t = mysqli_query($L, "SELECT * FROM amezenin_kul");
	printf("Kulastajate arv %d .\n", mysqli_num_rows($t));
	
	


?>