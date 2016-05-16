<?php
include_once "model/Request.php";
include_once "model/User.php";
//include_once "database/DatabaseConnector.php";
class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new User($params["name"],
				 $params["last_name"],
				 $params["email"],
				 $params["birthdate"],
				 $params["phone"],
				 $params["password"]);
		$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $this->generateInsertQuery($user);	
	}
	private function generateInsertQuery($user)
	{
		$query =  [$user->getName(),
					$user->getLastName(),
					$user->getEmail(),
					$user->getBirthdate(),
					$user->getPhone(),
					$user->getPassword()];
		return $query;						
	}
	
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		//$db = new DatabaseConnector("localhost", "facebook", "mysql", "", "root", "");
		//$conn = $db->getConnection();
		$result = "SELECT first_name, last_name, email, birthdate, phone FROM user WHERE ".$crit;
		//foreach($result as $row)
		//return $result->fetchAll(PDO::FETCH_ASSOC);
		return $result;
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