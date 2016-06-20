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
								$params["local"],
								$params["worktime"],
								$params["email"],
								$params["password"]);
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
		$paramsMap = ["name" => "", "local" => "", "worktime" => "", "email" => "", "password" => ""];
		$result = array_diff_key($paramsMap, $params);
		return $result;
	}
	
	private function generateInsertQuery($store)
	{
		$query = 	"INSERT INTO store (name, local, worktime, email, password) VALUES ('".$store->get_nameStore()."','".
					$store->get_localStore()."','".
					$store->get_worktimeStore()."','".
					$store->get_emailStore()."','".
					$store->get_passwordStore()."')";
		return $query;
	}

	public function search($request)
	{
		$params = $request->get_params();
		/*if($this->isEmpty($params) == true)
		{*/
			$crit = $this->generateCriteria($params);
			$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("SELECT name, local, worktime, email FROM store WHERE ".$crit);//aqui é o teste<----------
			//foreach($result as $row) 
			return $result->fetchAll(PDO::FETCH_ASSOC);
		/*} else {
			return "Ha campos vazios";
		}*/
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
