<?php
include_once "model/Request.php";
include_once "model/Store.php";
include_once "database/DatabaseConnector.php";
class StoreController
{

	public function register($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$store = new Store(	$params["name"],
								$params["location"],
								$params["worktime"],
								$params["prodserv"]);
			$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
			$conn = $db->getConnection();
			return $conn->query($this->generateInsertQuery($store));
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
	
	private function generateInsertQuery($store)
	{
		$query = 	"INSERT INTO store (name, location, worktime, codProdServ) VALUES ('".$store->get_nameStore()."','".
					$store->get_locationStore()."','".
					$store->get_worktimeStore()."','".
					$store->get_codProdServ()."')";
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
			$result = $conn->query("SELECT name, location, worktime, codProdServ FROM store WHERE ".$crit);
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
			$result = $conn->query("DELETE FROM store WHERE ".$crit);
			//foreach($result as $row) 
			return $result->fetchAll(PDO::FETCH_ASSOC);
		} else{
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
}
