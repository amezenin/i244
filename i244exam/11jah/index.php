<?php 
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
  <div id="textArea">
    <?php 
		echo file_get_contents($logfile);
		//print_r($data);
	?>
 </div>
  
  
  <div class="proov"><h1>Saate muuda vana sonum</h1></div>
	 <div class="soodapohi">
		
	<form action="index.php" method="POST">
        <table>
		<tr><td></td><td>Hindamis vorm.</td></tr>
		<tr><td></td><td>Loo lehekülje hindamise võimalus (skaalal Jah või Ei näiteks). Kuva välja leheküljele antud keskmist hinnet. Andmed salvesta andmebaasi..</td></tr>
		<tr><td> Valige hinne </td><td><select name="ranges" >
                    <option value="jah" selected>jah</option>
                    <option value="ei">ei</option>
                   
                </select></td></tr>
        <tr><td>Kinnitage hinne</td><td><input type='submit' name='hal' value='Kinnita valik' class="button"></td></tr>
	</table>
    </form>
	</div>
  
    
	
	
  </body>
</html>