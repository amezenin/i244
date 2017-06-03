<?php 
	include('aju.php');
	?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css"  />
    <meta charset="utf-8"/>
	<title>Text</title>
	
  </head>
  <body>
  <div id="textArea">
    <?php 
		echo file_get_contents($logfile);
		//print_r($data);
	?>
 </div>
  
  
  <div class="proov"><h1>Saate muuda vana sonum</h1></div>
	 <div class="soodapohi">
		
	<form action="index.php" method="POST">
        <textarea name="inputText" placeholder="Kirjuta siia midagi..." style="width:200px; height:200px;"><?php if(!empty($_POST["inputText"])){echo htmlspecialchars($_POST["inputText"]);}
                     else{echo file_get_contents($logfile); }  ?></textarea><br>
        
        <br>
        <input type="submit" name="salvesta" value="Muuda sonum">
    </form>
	</div>
  
    
	
	
  </body>
</html>