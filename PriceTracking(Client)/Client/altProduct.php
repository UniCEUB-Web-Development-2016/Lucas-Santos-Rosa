<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Modify Product</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	
  </head>
  <body>
  
    <div class="container">

    <form class="form-signin" action="updateproduct.php" method="post">
        <h2 class="form-signin-heading">Modify Product</h2>
        
        <input type="text" name="reference" id="inputNameReference" class="form-control" placeholder="Name Reference" required autofocus>
		
		<input type="text" name="product_name" id="inputProductName" class="form-control" placeholder="Product Name" required autofocus>

        <input type="text" name="product_type" id="inputProductType" class="form-control" placeholder="type" required autofocus>

        <input type="text" name="product_sales" id="inputProductSales" class="form-control" placeholder="sales" required autofocus>
		
		<input type="text" name="product_quant" id="inputProductQuant" class="form-control" placeholder="quant" required autofocus>

        <input type="text" name="product_price" id="inputProductPrice" class="form-control" placeholder="price" required autofocus>
      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
      </form>
	  

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>