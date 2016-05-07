<?php
include_once "model/Request.php";
include_once "model/Services.php";
include_once "database/DatabaseConnector.php";
class ServicesController
{

	public function register($request)
	{
		$params = $request->get_params();
		$service = new Services($params["name"],
				 $params["type"],
				 $params["time"],
				 $params["price"]);
		$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($service));
	}

	private function generateInsertQuery($service)
	{
		$query =  	"INSERT INTO services (name, type, time, price) VALUES ('".$service->get_nameService()."','".
					$service->get_typeService()."','".
					$service->get_timeService()."','".
					$service->get_priceService()."')";
		return $query;
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT name, type, time, price FROM services WHERE ".$crit);
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