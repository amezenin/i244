<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="reg ja sis.css"  />
    <meta charset="utf-8"/>
	<title>Teema 4</title>
	
  </head>
  <body>
  <h1>Registreerimine</h1>
    
	
	<?php 
	include("menu.php");
	?>
	
	<form method="post" action="vorm.php">
	
	<table class="tabel">
		<caption>Registreerimise vorm (eraldi POST php failisse)</caption>
		<tr> 
			<th>
			Kasutajanimi: 
			</th>
			<td>
				<input type="text" name="username" placeholder="Kasutajanimi" size="20">
			</td>
		</tr>
		<tr> 
			<th>
			Parool: 
			</th>
			<td>
				<input type="password" name="pass">
			</td>
		</tr>
		<tr> 
			<th>
			Korda parooli: 
			</th>
			<td>
			<input type="password" name="pass2">
			</td>
		</tr>
		<tr> 
			<td colspan="2">
			<button type="submit">Registreeri mind</button>
			</td>
		</tr>
	</table>
	</form>
	
	<div class="autor">
	&copy; 2017 Anton
	</div>
	
	<p>
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 </a>
</p>
	
  </body>
</html>