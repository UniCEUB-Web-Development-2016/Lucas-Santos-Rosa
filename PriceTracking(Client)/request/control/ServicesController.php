<?php
include_once "model/Request.php";
include_once "model/Services.php";
include_once "database/DatabaseConnector.php";
class ServicesController
{

	public function register($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$service = new Services($params["name"],
					$params["type"],
					$params["time"],
					$params["price"],
					$params["codStore"]);
			$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
			$conn = $db->getConnection();
			return $conn->query($this->generateInsertQuery($service));
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

	private function generateInsertQuery($service)
	{
		$query =  	"INSERT INTO services (name, type, time, price, codStore) VALUES ('".$service->get_nameService()."','".
					$service->get_typeService()."','".
					$service->get_timeService()."','".
					$service->get_priceService()."','".
					$service->get_codStore()."')";
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
			$result = $conn->query("SELECT name, type, time, price FROM services WHERE ".$crit);
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
			$result = $conn->query("DELETE FROM services WHERE ".$crit);
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
        $result = $conn->query($this->generateUpdateQuery($params));
		return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    private function generateUpdateQuery($params)
    {
        $crit = $this->generateUpdateCriteria($params);
        return "UPDATE services SET name = '" . $params["name"] 
								. "', type = '" . $params["type"] 
								. "', time = '" . $params["time"] 
								. "', price = '" . $params["price"] 
								. "' WHERE name = '" . $params["ref"] . "'";
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