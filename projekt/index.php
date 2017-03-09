

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8"/>
	<title>Kalakasvatuse programmid</title>

  </head>
  
  <body>
  <div class="form-head"><h1>Kalakasvatuse programmid</h1></div>

  <div class="container">
      <form class="form-signin" method="post" action="vorm.php">
        <h2 class="form-signin-heading">Sisseloogimine</h2>
        
        <input type="text" class="form-control" placeholder="Username" name="login" required autofocus>
       
        <input type="password" class="form-control" placeholder="Password" name="password" required autofocus>
		
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-primary" type="submit">Sign in</button>
      </form>
</div>
  </body>
</html>