<?php

  

	
	
	if ($_POST) {
	$a = $_POST['a'];
	$b = $_POST['b'];
	

	if ($_POST ['arv']){
		if ($a<=0 || $b<=0){
			echo '<table cellspacing="2" border="1" id="bog" >';
			echo '<tr><th> Viga </th></tr>';
			echo '<tr><td>Sissestage kõik andmed</td></tr>';
			echo '</table>';
		} elseif (is_numeric($a) && is_numeric($b)) {	
				$c=hypot($a,$b);
			echo '<table cellspacing="2" border="1" id="bog" >';
			echo '<tr><th> Hypotenuusi pikkus </th> </tr>';
			echo '<tr><td>' .  $c . '</td></tr>';
			echo '</table>';
		}
    }
}


?>