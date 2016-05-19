<?php
include_once "Classes and Objects/Request_PolosUAB.php";
include_once "Classes and Objects/PolosUAB.php";
include_once "ControlManager/DatabaseConnector.php";
class polosUABController
{
	public function register($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
		$polosuab = new Polosuab($params["id"],
								 $params["name"],
								 $params["status"],
								 $params["situation"],
								 $params["long"],
								 $params["lat"],
								 $params[uf],
								 $params[year]);
		$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
		$conn = $db->getConnection();
		return $conn->query($this->generateInsertQuery($courses));
		} else {
			return "There are empty fields!!!";
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
		$paramsMap = ["name" => "", "type" => "", "year" => "", "students" => ""];
		$result = array_diff_key($paramsMap, $params);
		return $result;
	}
	
	private function generateInsertQuery($polosuab)
	{
		$query =  	"INSERT INTO PolosUAB (id, name, status, situation, long, lat, uf, year) VALUES ('".$polosuab->get_id()."','".
					 $polosuab->get_name()."','".
					 $polosuab->get_status()."','".
					 $polosuab->get_situation()."','".
					 $polosuab->get_long()."','".
					 $polosuab->get_lat()."','".
					 $polosuab->get_uf()."','".
					 $polosuab->get_year()."','";
		return $query;
	}
	
	public function search($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
	{
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
		$conn = $db->getConnection();		
		$result = $conn->query("SELECT id, name, status, situation, long, lat, uf, year FROM PolosUAB WHERE ".$crit);
		return $result->fetchAll(PDO::FETCH_ASSOC);
		}else {
		return "There are empty fields!!!";
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
