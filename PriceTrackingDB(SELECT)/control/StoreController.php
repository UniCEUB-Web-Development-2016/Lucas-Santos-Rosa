<?php
include_once "model/Request.php";
include_once "model/Store.php";
include_once "database/DatabaseConnector.php";
class StoreController
{

	public function register($request)
	{
		$params = $request->get_params();
		$store = new Store(	$params["name"],
							$params["location"],
							$params["worktime"],
							$params["prodserv"]);
		
		
		$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
	    return $conn->query($this->generateInsertQuery($store));
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
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT name, location, worktime, codProdServ FROM store WHERE ".$crit);
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
