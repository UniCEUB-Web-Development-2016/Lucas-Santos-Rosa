<?php
include('httpful.phar');
include('../navsearch.php');

$url = "http://localhost/DataTest/request/store/?name=".$_GET['search_something'].
									"&local=".$_GET['search_something'].
									"&worktime=".$_GET['search_something'].
									"&email=".$_GET['search_something'];

$urll = "http://localhost/DataTest/request/products/?name=".$_GET['search_something'].
									"&type=".$_GET['search_something'].
									"&sales=".$_GET['search_something'].
									"&quant=".$_GET['search_something'].
									"&price=".$_GET['search_something'];

$urlll = "http://localhost/DataTest/request/services/?name=".$_GET['search_something'].
									"&type=".$_GET['search_something'].
									"&time=".$_GET['search_something'].
									"&price=".$_GET['search_something'];
									

$response1 = \Httpful\Request::get($url)->send();
$response2 = \Httpful\Request::get($urll)->send();
$response3 = \Httpful\Request::get($urlll)->send();

$store = json_decode($response1, true);
$products = json_decode($response2, true);
$services = json_decode($response3, true);

$response = ["Store" => $response1 , "Products" => $response2 , "Services" => $response3];

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>index</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
  </head>
  <body>
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class ="container">
		<div class="jumbotron">
		  <div class="container">
			<center><h1>BUSCA</h1></center>
		  </div>
		</div>
		<div class="col-md-4">
			<h1> Store </h1>
			<table class="table table-hover">
			<thead>
			  <tr>
				<th>Name</th>
				<th>Worktime</th>
				<th>location</th>
			  </tr>
			</thead>
			    <tbody>
				<?php 
				foreach($store as $s){
					echo "<tr>";
					echo "<td>" . $s['name'] . "</td>";
					echo "<td>" . $s['worktime'] . "</td>";
					echo "<td>" . $s['local'] . "</td>";
					echo "<tr>";
				}
				?>
				</tbody>
			</table>
		</div>
		<div class="col-md-4">
			<h1> Services </h1>
			<table class="table table-hover">
			<thead>
			  <tr>
				<th>Name</th>
				<th>type</th>
				<th>time</th>
				<th>price</th>
			  </tr>
			</thead>
			    <tbody>
				<?php 
				if($services != null){
				foreach($services as $s){
					echo "<tr>";
					echo "<td>" . $s['name'] . "</td>";
					echo "<td>" . $s['type'] . "</td>";
					echo "<td>" . $s['time'] . "</td>";
					echo "<td>" . $s['price'] . "</td>";
					echo "<tr>";
				}
				}else {
					
				}
				
				?>
				</tbody>
			</table>
		</div>
		<div class="col-md-4">
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
				foreach($products as $p){
					echo "<tr>";
					echo "<td>" . $s['name'] . "</td>";
					echo "<td>" . $s['type'] . "</td>";
					echo "<td>" . $s['price'] . "</td>";
					echo "<tr>";
				}
				?>
				</tbody>
			</table>
		</div>
	</div>

    </div> <!-- /container -->
  </body>
</html>