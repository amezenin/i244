

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css"  />
    <meta charset="utf-8"/>
	<title>Text</title>
	
  </head>
  
  
  
	 <body id="b">
	 
	  
	  <div class="proov"><h1>Loo lihtne kalkulaator, mis arvutab täisnurkse kolmnurga kahe kaateti järgi välja hüpotenuusi pikkuse. </h1></div>
	  <div class="soodapohi">
	  <form method="POST" action=''>
	  <table>
		<tr><td>Kateet, A </td><td><input TYPE="number" name="a"  placeholder="Sissestage arv" min="0" step="0.01" style="width:200px;" <?php if(!empty($_POST["a"]))
			echo "value=\"" . htmlspecialchars($_POST["a"])."\" "; ?>/></td><tr/>
	 
		<tr><td> Kateet, B</td><td> <input TYPE="number" name="b"  placeholder="Sissestage arv" min="0" step="0.01" style="width:200px;" <?php if(!empty($_POST["b"]))
			echo "value=\"" . htmlspecialchars($_POST["b"])."\" "; ?>/></td></tr>
	 
		<tr>
			<td><input type='submit' name='arv' value='Arvuta' class="button"></td>
		<!--<td><input type="reset" name='ochistit' value='Arvutan ise' class="button"></td> see osa nuud mottetu -->
		</tr>
	   </table>
	</form>
	  
	  </div>
	  
	  <?php 
		include('aju.php');
		?>  
		
		
	  </body>
</html>