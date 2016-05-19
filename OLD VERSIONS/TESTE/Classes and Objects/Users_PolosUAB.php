<?php
class users_PolosUAB{
	
	private $id_user;
	private $name_user;
	private $lastName_user;
	private $nickname;
	private $type_user;
	private $password_user;
	
		
	public function __construct($id_user, $name_user, $lastName_user, $nickname, $type_user, 
		$password_user){
		$this->set_userId($id_user);
		$this->set_userName($name_user);
		$this->set_userlastName($lastName_user);
		$this->set_nickname($nickname);
		$this->set_type($type_user);
		$this->set_password($password_user);
	}
	
	
	
	private function set_userId ($id_user){
		$this->id_user = $id_user;
	}
	
	private function set_userName ($name_user){
		$this->name_user = $name_user;
	}
	
	private function set_userlastName ($lastName_user){
		$this->lastName_user = $lastName_user;
	}
	
	private function set_nickname ($nickname){
		$this->nickname = $nickname;
	}
	
	private function set_type($type_user){
		$this->type_user = $type_user;
	}
	
	private function set_password($password_user){
		$this->password_user = $password_user;
	}
	
	
	
	public function get_userId (){
		return $this->id_user;
	}
	
	public function get_userName (){
		return $this->name_user;
	}
	
	public function get_userlastName (){
		return $this->lastName_user;
	}
	
	public function get_nickname(){
		return $this->nickname;
	}
		
	public function get_type(){
		return $this->type_user;
	}
	
	public function get_password(){
		return $this->password_user;
	}
	
}
