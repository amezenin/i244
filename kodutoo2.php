﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
	<title>Kodutoo 2</title>
	
  </head>
  <body>
  <h1>Päevane praktika</h1>
	
	<form method="post" action="vorm.php">
	<input type="hidden" name="aeg" value="2017-02-17">
	<table border="1">
		<caption>Registreerimise vorm (eralfi php failisse)</caption>
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
	
	<form method="post" action="vorm.php">
	
	<table border="1">
		<caption>Sisselogimise vorm (eraldi php failisse)</caption>
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
	
	
	
    <h1>Kaugõpe praktika</h1>
	<table border="1">
	<caption>Tuur (kalad)</caption>
	<tr>
			<th>
			Nimi
			</th>
			<th>
			Vanus 
			</th>
			<th>
			Liik 
			</th>
	</tr>
	<tr>
		<td>
		Valera
		</td>
		<td>
		3
		</td>
		<td>
		Vene tuur
		</td>
	</tr>
	<tr>
		<td>Maksim</td>
		<td>2</td>
		<td>Siberi tuur</td>
	</tr>
	<tr>
		<td>Urmas</td>
		<td>2</td>
		<td>Siberi tuur</td>
	</tr>
	<tr>
		<td>Rembo</td>
		<td>5</td>
		<td>Vene tuur</td>
	</tr>
	</table>
	
	<table border="1">
	<caption>Test</caption>
	<tr>
			<td colspan="3">&nbsp&nbsp</td>
			<td rowspan="3">&nbsp&nbsp&nbsp&nbsp</td>
	</tr>
	<tr>
		<td rowspan="3">&nbsp&nbsp&nbsp&nbsp</td>
		<td>&nbsp&nbsp&nbsp&nbsp</td>
		<td>&nbsp&nbsp&nbsp&nbsp</td>
		
	</tr>
	<tr>
		<td>&nbsp&nbsp</td>
		<td>&nbsp&nbsp</td>
		
	</tr>
	<tr>
		<td colspan="3">&nbsp&nbsp</td>	
	</tr>	
	</table>
	
	<!--Get osa-->
	
	<form method="get" action="kodutoo2.php">
	
	<table border="1">
		<caption>GET meetodiga enda peale</caption>
		<tr> 
			<th>
			<label for="Gusernameid">Kasutajanimi: </label>
			</th>
			<td>
				<input type="text" name="Gusername" id="Gusernameid" placeholder="Kasutajanimi" size="20">
			</td>
		</tr>
		<tr> 
			<th>
			<label for="Gpassid">Parool: </label>
			</th>
			<td>
				<input type="password" name="Gpass" id="Gpassid">
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
			<label>
			<input type="radio" name="radio" value="test"> Valik 1
			</label>
			<label>
			<input type="radio" name="radio" value="test2"> Valik 2
			</label>
			</td>
		</tr>
		<tr> 
			<td colspan="2">
			<input type="range" min="0" max="100" step="1" value="50"> 
			</td>
		</tr>
		<tr> 
			<td>Sisetage emailid, multiple</td>
			<td>
			<input type="email" name="email" multiple>
			</td>
		</tr>
		
		<tr> 
			<td colspan="2">
			<button type="submit">Logi sisse</button>
			</td>
		</tr>
	</table>
	</form>

	
	
    <p><img src="pictures/acistus.jpg" alt="Kala"/></p>

  </body>
</html>