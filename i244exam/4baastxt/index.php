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
		<form method="POST" action='' enctype="multipart/form-data">
	<table>
		<tr><td></td><td>Texti faili laemise vorm.</td></tr>
		<tr><td>Lae siia fail: </td><td><input type="file" name="lae" style="width:200px;"/><br/> </td><tr/>
 
		
		</td></tr>
		<tr>
		<td><input type='submit' name='lae' value='Lae faili' class="button"></td>
<!--<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> see osa nuud mottetu -->
	</tr>
	<tr>
		<td><input type='submit' name='nae' value='Vaadata faili kogus' class="button"></td>

	</tr>
	</table>
	</div>
  
    <?php 
	include('aju.php');
	?>
	
	
  </body>
</html>