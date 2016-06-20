<?php
session_start();
include_once "DatabaseConnector.php";

$campos = "../addService.php";
$ident = 0;

if (isset($_POST['submitted'])) { // Check if the form has been submitted.
	$u = $_POST['user_id'];
	$p = $_POST['pass'];
	
	$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
	$conn = $db->getConnection();
	$result = $conn->query("SELECT idt_store, name FROM store WHERE name = '" . $u . "' AND password = '" . $p . "'");
	$query = $result->fetchAll(PDO::FETCH_ASSOC);
	$i += $query[0]['idt_store'];
	
	if($query != null){
		$_SESSION['CurrentUser'] = $i;
	} else {
		$_SESSION['CurrentUser'] = null;
		echo "Senha ou usuário invalidos";
	}
	
}

	$ident += $_SESSION['CurrentUser'];


	if (isset($_GET['newP'])){
		$campos = "../addProduct.php";
	}
	if (isset($_GET['newS'])){
		$campos = "../addService.php";
	}
	if (isset($_GET['upP'])){
		$campos = "../altProduct.php";
	}
	if (isset($_GET['upS'])){
		$campos = "../altService.php";
	}
	if (isset($_GET['logout'])){
		session_unset();
		session_destroy();
		header('Location: http://localhost/DataTest/Client/');
	}

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title> Your profile </title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/signin.css" rel="stylesheet">
	
  </head>
  <body>
	
	<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Options</h2>
				<form class="form-signin">
					<button class="btn btn-block" type="submit">New Product</button><input type="hidden" name="newP" value="TRUE" />
				</form>
				<form class="form-signin">
					<button class="btn btn-block" type="submit">New Service</button><input type="hidden" name="newS" value="TRUE" />
				</form>	
				<form class="form-signin">
					<button class="btn btn-block" type="submit">Change Product</button><input type="hidden" name="upP" value="TRUE" />
				</form>
				<form class="form-signin">
					<button class="btn btn-block" type="submit">Change Service</button><input type="hidden" name="upS" value="TRUE" />
				</form>
				<form class="form-signin">
					<button class="btn btn-block" type="submit">LogOut</button><input type="hidden" name="logout" value="TRUE" />
				</form>
        </div>
        <div class="col-md-4">
			<?php include ($campos); ?>
        </div>
       </div>
      </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>
