
<?php
$kala = array("Окунь", "Щука", "Лещ", "Рак", "Плотва");

	if ($_POST['lovit']){
        
		$rand_frases = array_rand($kala, 1);
	echo '<h2 style="color:#00C; margin-left:300px">'. $kala[$rand_frases] .'</h2>';
	
    }



    

?>  
