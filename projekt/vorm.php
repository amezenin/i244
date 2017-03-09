<?php

	header("content-type: text/plain; charset=utf-8"); 
	
	session_start();
  if(!empty($_POST['password']) && !empty($_POST['login'])){
     $pass = "admin";
	 $log = "admin";
    if(($_POST['password']==$pass) && ($_POST['login']==$log)){
      $_SESSION['access']=true;
      header("Location: pea.php") ;//Тут ссылка при правильном пароле
    }
    else {
       header("Location: index.php") ;//Тут ссылка при неправильном пароле
	 
    }
  }
  else
  {
?>
<?php } ?>
