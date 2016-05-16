<?php
include_once "Classes and Objects/Request_PolosUAB.php";
include_once "Classes and Objects/Courses_PolosUAB.php";
include_once "ControlManager/DatabaseConnector.php";
class Courses_Controller
{
	public function register($request)
	{	
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$courses = new Courses($params["id"],$params["name"],$params["type"],$params["year"],$params["students"]);
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
	private function generateInsertQuery($courses)
	{
		$query =  	"INSERT INTO Courses (id, name, type, year, students) VALUES ('".$courses->get_id()."','".
					 $courses->get_name()."','".
					 $courses->get_type()."','".
					 $courses->get_year()."','".
					 $courses->get_students();
		return $query;
	}
	
	public function search($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true){
	
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT id, name, type, year, students FROM Courses WHERE ".$crit);
		return $result->fetchAll(PDO::FETCH_ASSOC);
		}else {
			return "There are empty fields!!!";
		}
	}
	
	public function ReqDelete($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$crit = $this->deleteCriteria($params);
			$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("DELETE FROM courses WHERE ".$crit);
			return $result->fetchAll(PDO::FETCH_ASSOC);
		} else{
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
