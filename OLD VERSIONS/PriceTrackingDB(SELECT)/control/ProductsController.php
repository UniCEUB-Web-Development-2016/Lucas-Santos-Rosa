<?php
include_once "model/Request.php";
include_once "model/Products.php";
include_once "database/DatabaseConnector.php";
class ProductsController
{
	public function register($request)
	{
		$params = $request->get_params();
		$products = new Products($params["name"],
								 $params["type"],
								 $params["sales"],
								 $params["quant"],
								 $params["price"]);
		$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($products));
	}
	private function generateInsertQuery($products)
	{
		$query =  	"INSERT INTO products (name, type, sales, quant, price) VALUES ('".$products->get_productName()."','".
					 $products->get_productType()."','".
					 $products->get_sales()."','".
					 $products->get_quant()."','".
					 $products->get_price()."')";
		return $query;
	}
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT name, type, sales, quant, price FROM products WHERE ".$crit);
		//foreach($result as $row) 
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}
		return substr($criteria, 0, -4);	
	}
}
