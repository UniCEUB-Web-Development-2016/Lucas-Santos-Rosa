<?php

class Store{
	
	private $name_store;
	private $openclose_store;
	private $location_store;
	private $cod_product;
	private $cod_service;
	
	
	public function __construct($name_store, $openclose_store, $location_store, $cod_product, $cod_service){
		$this->set_nameStore($name_store);
		$this->set_OpenCloseTime($openclose_store);
		$this->set_locationStore($location_store);
		$this->set_product($cod_product);
		$this->set_service($cod_service);
	}
	
	//SET
	private function set_nameStore($name_store){
		$this->name_store = $name_store;
	}
	
	private function set_OpenCloseTime($openclose_store){
		$this->openclose_time = $openclose_store;
	}
	
	private function set_locationStore($location_store){
		$this->location = $location_store;
	}
	
	private function set_product($cod_product){
		$this->product = $cod_product;
	}
	
	private function set_service($cod_service){
		$this->service = $cod_service;
	}
	
	//GET
	public function get_nameStore(){
		return $this->name_store;
	}
	
	public function get_OpenClosetime(){
		return $this->openclose_store;
	}
	
	public function get_locationStore(){
		return $this->location_store;
	}
	
	public function get_product(){
		return $this->cod_product;
	}
	
	public function get_service(){
		return $this->cod_service;
	}
}