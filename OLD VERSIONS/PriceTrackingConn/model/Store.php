<?php

class Store{
	
	private $name_store;
	private $location_store;
	private $worktime_store;
	private $codProdServ;
	
	
	public function __construct($name_store, $location_store, $worktime_store, $codProdServ){
		$this->set_nameStore($name_store);
		$this->set_locationStore($location_store);
		$this->set_worktimeStore($worktime_store);
		$this->set_codProdServ($codProdServ);
	}
	
	//SET
	private function set_nameStore ($name_store){
		$this->name_store = $name_store;
	}
	
	private function set_locationStore ($location_store){
		$this->location_store = $location_store;
	}
	
	private function set_worktimeStore($worktime_store){
		$this->worktime_store = $worktime_store;
	}
	
	private function set_codProdServ($codProdServ){
		$this->codProdServ = $codProdServ;
	}
	
	//GET
	public function get_nameStore (){
		return $this->name_store;
	}
	
	public function get_locationStore (){
		return $this->location_store;
	}
	
	public function get_worktimeStore(){
		return $this->worktime_store;
	}
	public function get_codProdServ(){
		return $this->codProdServ;
	}
}