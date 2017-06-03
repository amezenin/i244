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
		<tr><td></td><td>Hindamis vorm.</td></tr>
		<tr><td></td><td>Loo lehekülje hindamise võimalus (skaalal 1-5 näiteks). Kuva välja leheküljele antud keskmist hinnet. Andmed salvesta andmebaasi..</td></tr>
		<tr><td> Valige hinne </td><td><select name="ranges" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5" selected>5</option>
                </select></td></tr>
		<tr><td>Kinnitage hinne</td><td><input type='submit' name='hinne' value='Kinnita' class="button"></td></tr>
	</table>
	</div>
  </form>
    <?php 
	include('aju.php');
	?>
	
	
  </body>
</html>