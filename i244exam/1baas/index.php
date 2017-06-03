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
		<tr><td></td><td>Loo lihtne kommentaaride lisamise vorm. Andmed salvesta andmebaasi. Kuva salvestaud kommentaare.</td></tr>
		<tr><td>Kirjutage koment: </td><td><input TYPE="textArea" name="text"  placeholder="Kirjuta midagi siia" style="width:200px;" <?php if(!empty($_POST["text"]))
	  echo "value=\"" . htmlspecialchars($_POST["text"])."\" "; ?>/></td><tr/>
 
		
		</td></tr>
		<tr>
		<td><input type='submit' name='vichislit' value='Salvesta' class="button"></td>
<!--<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> see osa nuud mottetu -->
	</tr>
	<tr>
		<td><input type='submit' name='kuva' value='Kuva komentaare' class="button"></td>
<!--<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> see osa nuud mottetu -->
	</tr>
	</table>
	</div>
  
    <?php 
	include('aju.php');
	?>
	
	
  </body>
</html>