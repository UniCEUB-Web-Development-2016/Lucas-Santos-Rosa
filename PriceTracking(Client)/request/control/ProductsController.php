<?php
include_once "model/Request.php";
include_once "model/Products.php";
include_once "database/DatabaseConnector.php";
class ProductsController
{
	public function register($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$products = new Products($params["name"],
									$params["type"],
									$params["sales"],
									$params["quant"],
									$params["price"]);
			$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
			$conn = $db->getConnection();
			return $conn->query($this->generateInsertQuery($products));
		} else {
			return "Ha campos vazios";
		}
	}
	
	private function isEmpty($params)
	{
		if($this->compare($params) == null)
		{
			return true;
		} else {
			return false;
		}
	}
	
	private function compare($params)
	{
		$paramsMap = ["name" => "", "type" => "", "time" => "", "price" => ""];
		$result = array_diff_key($paramsMap, $params);
		return $result;
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
		if($this->isEmpty($params) == true)
		{
			$crit = $this->generateCriteria($params);
			$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("SELECT name, type, sales, quant, price FROM products WHERE ".$crit);
			//foreach($result as $row) 
			return $result->fetchAll(PDO::FETCH_ASSOC);
		} else {
			return "Ha campos vazios";
		}
	}
	
	public function ReqDelete($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$crit = $this->deleteCriteria($params);
			$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("DELETE FROM products WHERE ".$crit);
			//foreach($result as $row) 
			return $result->fetchAll(PDO::FETCH_ASSOC);
		} else {
			return "Ha campos vazios";
		}
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
	
	private function deleteCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '".$value."' AND ";
		}
		return substr($criteria, 0, -5);	
	}
	
	public function update($request)
    {
        $params = $request->get_params();
        $db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
        $conn = $db->getConnection();
        return $conn->query($this->generateUpdateQuery($params));
    }
    private function generateUpdateQuery($params)
    {
        $crit = $this->generateUpdateCriteria($params);
        return "UPDATE user SET " . $crit . " WHERE name = '" . $params["name"] . "'";
    }
    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }
        return substr($criteria, 0, -2);
    }
}
