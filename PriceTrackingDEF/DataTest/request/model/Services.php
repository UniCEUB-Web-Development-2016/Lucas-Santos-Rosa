<?php

class Services{
	
	private $name_service;
	private $type_service;
	private $time_service;
	private $price_service;
	private $codStore;
	
	
	public function __construct($name_service, $type_service, $time_service, $price_service, $codStore){
		$this->set_nameService ($name_service);
		$this->set_typeService ($type_service);
		$this->set_timeService ($time_service);
		$this->set_priceService($price_service);
		$this->set_codStore($codStore);
	}
	
	//SET
	private function set_nameService($name_service){
		$this->name_service = $name_service;
	}
	
	private function set_typeService($type_service){
		$this->type_service = $type_service;
	}
	
	private function set_timeService($time_service){
		$this->time_service = $time_service;
	}
	
	private function set_priceService($price_service){
		$this->price_service = $price_service;
	}
	
	private function set_codStore($codStore){
		$this->codStore = $codStore;
	}
	
	//GET
	public function get_nameService(){
		return $this->name_service;
	}
	
	public function get_typeService(){
		return $this->type_service;
	}
	
	public function get_timeService(){
		return $this->time_service;
	}
	
	public function get_priceService(){
		return $this->price_service;
	}
	
	public function get_codStore(){
		return $this->codStore;
	}
}