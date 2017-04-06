<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="sooda.css"  />
    <meta charset="utf-8"/>
	<title></title>
	
  </head>
  <body id="b">
 
  
  <div class="proov"><h1>Biofiltri võimsuse kalkulaator </h1></div>
  
  <div class="soodapohi">
  <form method="POST" action=''>
  <table>
  <tr><td>Maksimaalne biomass (kg) </td><td><input TYPE="text" name="maxBio" value="" placeholder="1000" /></td><tr/>
 
 <tr><td>Maximaalne söödakogus päevas (%)</td><td> <input TYPE="text" name="maxSooda" value="" placeholder="1.2" /></td></tr>
 <tr><td>Proteini sisalduse protsent </td><td> <input TYPE="text" name="prot" value="" placeholder="50" /></td></tr>
 <tr><td>Elemendi tööpindala (m2/m3) </td><td> <input TYPE="text" name="element" value="" placeholder="450" /></td></tr>
 <tr><td>Temperatuur süsteemis (C) </td><td> 
 <select name="temp">
                <option value="0.3">5</option>
                <option value="0.5">10</option>
                <option value="0.8">15</option>
                <option value="1.0">20</option>
            </select> <br>
 </td></tr>
<tr>
<td><input type='submit' name='vichislit' value='Tee elu lihtsam' class="button"></td>
<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> 
</tr>
</table>
</form>
  
  </div>
    
	
	
	
	
	
	
	<div class="autor">
	&copy; 2017 Anton
	</div>
	
	<?php 
	
	include("navigation.php");
	include("bioarvutamine.php");
	
?>
	
	
  </body>
</html>