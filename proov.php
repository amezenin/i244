<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8"/>
	<title>Teema 4</title>
	
  </head>
  <body>
  <h1>Sisseloogimine</h1>
    
	
	<?php 
	include("menu.php");
	?>
	
	<div class="container">
	
	<form method="post" action="vorm.php">
	
	<table class="tabel">
		<caption>Sisselogimise vorm (eraldi POST php failisse)</caption>
		<tr> 
			<th>
			<label for="Susernameid">Kasutajanimi: </label>
			</th>
			<td>
				<input type="text" name="Susername" id="Susernameid" placeholder="Kasutajanimi" size="20">
			</td>
		</tr>
		<tr> 
			<th>
			<label for="Spassid">Parool: </label>
			</th>
			<td>
				<input type="password" name="Spass" id="Spassid">
			</td>
		</tr>
		<tr> 
			<td colspan="2">
			<label>
			<input type="checkbox" name="rememerme" value="test"> Pea mind meeles
			</label>
			</td>
		</tr>
		<tr> 
			<td colspan="2">
			<button type="submit">Logi sisse</button>
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