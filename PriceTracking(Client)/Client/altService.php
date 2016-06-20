<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Modify Service</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	
  </head>
  <body>
  
    <div class="container">

    <form class="form-signin" action="updateservices.php" method="post">
        <h2 class="form-signin-heading">Modify Service</h2>
        
        <input type="text" name="reference" id="inputNameReference" class="form-control" placeholder="Name Reference" required autofocus>
		
		<input type="text" name="services_name" id="inputServiceName" class="form-control" placeholder="Product Name" required autofocus>

        <input type="text" name="services_type" id="inputServiceType" class="form-control" placeholder="type" required autofocus>

        <input type="text" name="services_time" id="inputServiceTime" class="form-control" placeholder="time" required autofocus>

        <input type="text" name="services_price" id="inputServicePrice" class="form-control" placeholder="price" required autofocus>
      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
    </form>
	  
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>