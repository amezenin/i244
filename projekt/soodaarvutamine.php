
<?php

if ($_POST) {
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$n = $_POST['n'];

	if ($_POST['vichislit']){
        //$f = ($a *$b)/100;  echo  "Количество корма, 1 день  " . $f. '<br>';
		$sql1 = "TRUNCATE TABLE sooda_andmed";
		if (mysqli_query($l, $sql1)) {
			echo " ";
		} else {
			echo "Error: " . $sql1 . "<br>" . mysqli_error($l);
		}
        
		
        echo '<table cellspacing="2" border="1" id="bog" >';
		echo '<tr><th> Päev </th> <th> Biomass </th> <th> Söödakogus </th> <th> Juurdekasv </th></tr>';
        for($i=0;$i<$n;$i++){
			if($i == 0){
				$a = $a;
			}
			else{
				$a = $a + ($a*$b/$c)/100;
			}
			echo '<tr><td>' . ($i+1) .'  </td><td>  ' . $a . '</td><td>  ' . ($a * $b)/100 . '</td> <td>' . ($a*$b/$c)/100 .'</td></tr>';
			
			$sql = "INSERT INTO sooda_andmed (sooda_id, sooda_paev, sooda_biomass, sooda_kogus, sooda_kasv) VALUES (" . ($i+1) . ", " . ($i+1) . ", " . $a . ", " . ($a * $b)/100 . ", " . ($a*$b/$c)/100 . ")";
			if (mysqli_query($l, $sql)) {
				echo " ";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($l);
			}
        }
        echo '</table>';
    }
}


    

?>  
