<?php
class Connection{
	private $bd_info;
	private $ip;
	private $bd_name;
	private $username;
	private $password;
	
	public function __construct($bd_info, $ip, $bd_name, $username, $password){
		$this->bd_info = $bd_info;
		$this->ip = $ip;
		$this->bd_name = $bd_name;
		$this->username = $username;
		$this->password = $password;
		
	}
	
	public function getConnect(){
		try {
		$conn = new PDO($this->bd_info . ":host=" . $this->ip . ";dbname=" . $this->bd_name , $this->username, $this->password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
		}
		catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		}
	}
	
	public function getQuerry($conn){
		
	}
}