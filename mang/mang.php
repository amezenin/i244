<!DOCTYPE html>
<html>
  <head>
	 <link rel="stylesheet" type="text/css" href="mang.css"  />
    <meta charset="utf-8"/>
	<title>Mäng</title>
  </head>
  <body>
 <div class="nav">
	<div class="nava">
		 <div class="el">Denegki:</div>
		 <div class="el">Udo4ka:</div>
		 <div class="el">
			<form method="POST" action=''>
				<input type='submit' name='lovit' value='Lovitj' class="button">
			</form>
		 </div>
		 <div class="el"><?php echo $kala;?></div>
	</div>	 
 </div>
 
 <?php 
	include("lovit.php");
?>
	
  </body>
</html>