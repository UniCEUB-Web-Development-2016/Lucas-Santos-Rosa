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
		
		
	    return $this->generateInsertQuery($products);
	}
	private function generateInsertQuery($products)
	{
		$query =  	"INSERT INTO products (name, type, sales, quant, price) VALUES ('".$products->get_productName()."','".
					 $products->get_productType()."','".
					 $products->get_sales()."','".
					 $products->get_quant()."','".
					 $products->get_price();
		return $query;
	}
}
