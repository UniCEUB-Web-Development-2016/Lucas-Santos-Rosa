<?php 
include('httpful.phar');

$i = $_SESSION['CurrentUser'];

$url = "http://localhost/DataTest/request/products/?codStore=".$_SESSION['CurrentUser'];
$products = \Httpful\Request::get($url)->send();

$plist = json_decode($products, true);
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>New Product</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	
  </head>
  <body>
		<h1> Products </h1>
		<table class="table table-hover">
		<thead>
		  <tr>
			<th>Name</th>
			<th>type</th>
			<th>price</th>
		  </tr>
		</thead>
		    <tbody>
			<?php 
			foreach($plist as $p){
				echo "<tr>";
				echo "<td>" . $p['name'] . "</td>";
				echo "<td>" . $p['type'] . "</td>";
				echo "<td>" . $p['price'] . "</td>";
				echo "</tr>";
			}
			?>
			</tbody>
		</table>
  </body>