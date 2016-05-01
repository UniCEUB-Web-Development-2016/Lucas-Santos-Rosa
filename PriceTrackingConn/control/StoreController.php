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
		
	    return $this->generateInsertQuery($store);
	}
	private function generateInsertQuery($store)
	{
		$query = 	"INSERT INTO products (name, location, worktime, prodserv) VALUES ('".$store->get_nameStore()."','".
					$store->get_locationStore()."','".
					$store->get_worktimeStore()."','".
					$store->get_codProdServ();
		return $query;
	}
}
