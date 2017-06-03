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
		
	<table>
		<tr><td></td><td>Loo veebilehekülg, mis kuvab, kas kasutaja kell on õige (ehk serveri kellaga sama). Kuva lehel ka mõlemad kellaajad..</td></tr>
		
 
	
		<tr>
		<td><?php
	echo '<p>Serveri aeg on '. date("H:i:s").'</p>';
?></td>
	</tr>
	<tr><td> 
Kliendipoolne aeg on  
<script type="text/javascript">
	var now = new Date();
	var hours = now.getHours();
	var minutes = now.getMinutes();
	var seconds = now.getSeconds();
	document.write(hours,":", minutes,":", seconds)
</script>
</p>
	</td></tr>
	</table>
	</div>
	
	
	
  </body>
</html>