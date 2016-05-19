<?php
include_once "Classes and Objects/Request_PolosUAB.php";
include_once "Classes and Objects/Users_PolosUAB.php";
class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
		$user = new User($params["name"],
				 $params["last_name"],
				 $params["email"],
				 $params["nickname"],
				 $params["type"],
				 $params["pass"]);
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
	
	private function generateInsertQuery($user)
	{
		$query =  	"INSERT INTO User (id, name, status, situation, long, lat, uf, year) VALUES ('".$user->get_id()."','".
					 $user->get_name()."','".
					 $user->get_last_name()."','".
					 $user->get_email()."','".
					 $user->get_nickname()."','".
					 $user->get_type()."','".
					 $user->get_pass()."','";
		return $query;					
	}
	
	public function search($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
	{
		$crit = $this->generateCriteria($params);
		$result = "SELECT name, last_name, email, nickname, type FROM User WHERE ".$crit;
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
