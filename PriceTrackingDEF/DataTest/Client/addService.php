<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>New Service</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	
  </head>
  <body>

    <div class="container">

    <form class="form-signin" action="insertservice.php" method="post">
        <h2 class="form-signin-heading">New Service</h2>
        
        <input type="text" name="service_name" id="inputServiceName" class="form-control" placeholder="Service Name" required autofocus>

        <input type="text" name="service_type"id="inputServiceType" class="form-control" placeholder="type" required autofocus>

        <input type="text" name="service_time" id="inputServiceTime" class="form-control" placeholder="time" required autofocus>
		
		<input type="duble" name="service_price" id="inputServicePrice" class="form-control" placeholder="price" required autofocus>
      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button><input type="hidden" name="codStore" value="<?php echo $_SESSION['CurrentUser']; ?>" />
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>