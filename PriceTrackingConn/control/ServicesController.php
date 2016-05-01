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
		
		
	    return $this->generateInsertQuery($service);
	}
	private function generateInsertQuery($service)
	{
		$query =  	"INSERT INTO service (name, type, time, price) VALUES ('".$service->get_nameService()."','".
					$service->get_typeService()."','".
					$service->get_timeService()."','".
					$service->get_priceService();
		return $query;
	}
}