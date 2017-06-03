 <?php
	if (!isset($_COOKIE["note"])) {
		$cookie_name = "note";
		$note;
		setcookie($cookie_name, $note, time() + (86400 * 30), "/"); // 86400 = 1 day	
	}

	
	include('aju.php');
	?>

<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" type="text/css" href="style.css"  /> 
    <meta charset="utf-8"/>
	<title>Text</title>
	
  </head>
  <body>
  <div class="proov"><h1>Text</h1></div>
	 <div class="soodapohi">
		<form method="POST" action=''>
	<table>
		<tr><td></td><td>Loo lihtne lehekülg märkmete tegemiseks. Igal kasutajal on oma isiklikud märkmed..</td></tr>
		
 <tr><td>
 <tr><td>Kirjutage koment: </td><td><input TYPE="textArea" name="text"  placeholder="Kirjuta midagi siia" style="width:200px;" <?php if(!empty($_POST["text"]))
	  echo "value=\"" . htmlspecialchars($_POST["text"])."\" "; ?>/></td><tr/>
		
		</td></tr>
		<tr>
		<td><input type='submit' name='Lisa' value='Kuva sisselogimise log' class="button"></td>
<!--<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> see osa nuud mottetu -->
	</tr>
	
	<td><tr><?php 
		if (isset($_COOKIE["note"])) {
			echo $_COOKIE["note"];
		}
	?></td></tr>
	
	</table>
	</div>
	</form>
   <?php 
   echo 'Time: ' . $date . "<br>\n";
   echo 'Koment: ' . $a . "<br>\n"; ?>
	
	
  </body>
</html>