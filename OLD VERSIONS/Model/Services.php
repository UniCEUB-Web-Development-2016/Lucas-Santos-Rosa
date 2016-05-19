<?php

class Services{
	
	private $name_service;
	private $tipe_service;
	private $time_service;
	private $price_service;
	
	
	public function __construct($name_service, $tipe_service, $time_service, $price_service){
		$this->set_nameService ($name_service);
		$this->set_tipeService ($tipe_service);
		$this->set_timeService ($time_service);
		$this->set_priceService($price_service);
	}
	
	//SET
	private function set_nameService($name_service){
		$this->name_service = $name_service;
	}
	
	private function set_tipeService($tipe_service){
		$this->tipe_service = $tipe_service;
	}
	
	private function set_timeService($time_service){
		$this->time_service = $time_service;
	}
	
	private function set_priceService($price_service){
		$this->price_service = $price_service;
	}
	
	//GET
	public function get_nameService(){
		return $this->name_service;
	}
	
	public function get_tipeService(){
		return $this->tipe_service;
	}
	
	public function get_timeService(){
		return $this->time_service;
	}
	
	public function get_priceService(){
		return $this->price_service;
	}
}