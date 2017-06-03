<?php

  
 /*$host="localhost";
  $user="root";
  $pass="ghbdtn123";
  $db="proov";
  $L = mysqli_connect($host, $user, $pass, $db) or die("ei saa mootoriga ühendust");
  mysqli_query($L, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($L));*/

	// Пути загрузки файлов
$path = 'up/';

// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
// Максимальный размер файла
$size = 1024000;

// Обработка запроса
if ($_POST['lae'])
{
	// Проверяем тип файла
	if (!in_array($_FILES['lae']['type'], $types))
		die('Vale faili tyyp. <a href="?">Proovige veel?</a>');

	// Проверяем размер файла
	if ($_FILES['lae']['size'] > $size)
		die('Liiga suur fail. <a href="?">Proovige veel?</a>');

	// Загрузка файла и вывод сообщения
	if (!move_uploaded_file($_FILES['lae']['tmp_name'], $path . $_FILES['lae']['name']))
		echo 'Midagi laks valesti';
	else
		 echo 'Fail on laetud <a href="' . $path . $_FILES['lae']['name'] . '">Vaadake pilt</a> ' ;
}
	//количество файлов
	if($_POST['nae']){
		$dir = opendir('up/');
		
$count = 0;
while($file = readdir($dir)){
    if($file == '.' || $file == '..' || is_dir('up' . $file)){
        continue;
    }
    $count++;
}
echo 'Pildi kogus: ' . $count;
	//pokazatj faili
$dir2    = 'up/';
$files1 = scandir($dir2,1); //1 zna4it 4to sorterujem po alfavitnomu ubivaniju.

echo '<br>';
print_r($files1);

	
	}
	
	
	
	
	/*if ($_POST) {
	
	if ($_POST['lae']){
		$allowedExts = array("jpg", "jpeg", "gif", "png");
		$allowedTypes = array("image/gif", "image/jpeg", "image/png","image/pjpeg");
		$extension = end(explode(".", $_FILES["lae"]["name"]));
		
	
		// загрузка временных файлов
		/*$uploaddir = 'up/';
		$uploadfile = $uploaddir.basename($_FILES['lae']['name']);*/
		
			/*if ( in_array($_FILES["lae"]["type"], $allowedTypes)
		&& ($_FILES["lae"]["size"] < 100000)
		&& in_array($extension, $allowedExts)) {
    // fail õiget tüüpi ja suurusega
		if ($_FILES["lae"]["error"] > 0) {
			$_SESSION['notices'][]= "Return Code: " . $_FILES["lae"]["error"];
			return "";
		} else {
      // vigu ei ole
			if (file_exists("up/" . $_FILES["lae"]["name"])) {
        // fail olemas ära uuesti lae, tagasta failinimi
				$_SESSION['notices'][]= $_FILES["lae"]["name"] . " juba eksisteerib. ";
				return "up/" .$_FILES["lae"]["name"];
			} else {
        // kõik ok, aseta pilt
				move_uploaded_file($_FILES["lae"]["tmp_name"], "up/" . $_FILES["lae"]["name"]);
				return "up/" .$_FILES["lae"]["name"];
			}
		}
	} else {
		return "";
	}*/
		
		/*echo '<pre>';
		if (move_uploaded_file($_FILES['lae']['tmp_name'], $uploadfile)) {
		echo "Файл корректен и был успешно загружен.\n";
		} else {
		echo "Возможная атака с помощью файловой загрузки!\n";
		}

		echo 'Некоторая отладочная информация:';
		print_r($_FILES);

		print "</pre>";*/
		
		
		
		

	
	
	
	


?>