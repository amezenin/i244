<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="sooda.css"  />
    <meta charset="utf-8"/>
	<title>Sooda</title>
	
  </head>
  <body id="b">
 
  
  <div class="proov"><h1>Söödaplaani koostamise kalkulaator </h1></div>
  
  <div class="soodapohi">
  <form method="POST" action=''>
  <table>
  <tr><td>Biomass (kg) </td><td><input TYPE="text" name="a" value="" placeholder="1000" /></td><tr/>
 
 <tr><td>Sööda kogus päevas (%)</td><td> <input TYPE="text" name="b" value="" placeholder="1.2" /></td></tr>
 <tr><td>Söödakoefitsient (FCR) </td><td> <input TYPE="text" name="c" value="" placeholder="1.2" /></td></tr>
 <tr><td>Päevade arv </td><td> <input TYPE="text" name="n" value="" placeholder="11" /></td></tr>

<tr><td><input type='submit' name='vichislit' value='Tee elu lihtsam' class="button"> </td><td><input type="reset" name='ochistit' value='Arvutan ise' class="button"> </td></tr>


</table>
</form> 
  
  </div>
    
	
	
	
	
	
	
	
	
	<?php 
	include("navigation.php");
	include("soodaarvutamine.php");
	?>
	
	
  </body>
</html>