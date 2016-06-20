<?php include('navbar.php') ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	
  </head>
  <body>

    <div class="container">

    <form class="form-signin" action="Command/insertuser.php" method="post">
        <h2 class="form-signin-heading">Please sign up</h2>
        
        <input type="text" name="store_name" id="inputStoreName" class="form-control" placeholder="Store Name" required autofocus>

        <input type="text" name="store_local"id="inputLatitude" class="form-control" placeholder="Local" required autofocus>
		
		<input type="text" name="store_worktime" id="inputWorktime" class="form-control" placeholder="Worktime" required autofocus>

        <input type="email" name="store_email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
    </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>