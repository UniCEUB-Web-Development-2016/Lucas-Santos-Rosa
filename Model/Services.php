<?php

class Services{
	
	$name_service;
	$tipe_service;
	$time_service;
	$price_service;
	
	
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
		echo $name_service;
	}
	
	public function get_tipeService(){
		echo $tipe_service;
	}
	
	public function get_timeService(){
		echo $time_service;
	}
	
	public function get_priceService(){
		echo $price_service;
	}
}