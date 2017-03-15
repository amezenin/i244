
<?php



if ($_POST) {
	$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$n = $_POST['n'];

if ($_POST['vichislit']){
    
       

        //$f = ($a *$b)/100;  echo  "Количество корма, 1 день  " . $f. '<br>';

   

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
        }
        echo '</table>';

    }
}


    

?>  
