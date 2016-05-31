<?php

class Store{
	
	//private $idt_store;
	private $name_store;
	private $lat_store;
	private $log_store;
	private $worktime_store;
	
	
	public function __construct($name_store, $lat_store, $log_store, $worktime_store){
		//$this->set_idtStore($idt_store);
		$this->set_nameStore($name_store);
		$this->set_lat($lat_store);
		$this->set_log($log_store);
		$this->set_worktime($worktime_store);
	}
	
	//SET
	/*private function set_idtStore ($idt_store){
		$this->idt_store = $idt_store;
	}*/
	
	private function set_nameStore ($name_store){
		$this->name_store = $name_store;
	}
	
	private function set_latStore ($lat_store){
		$this->lat_store = $lat_store;
	}
	
	private function set_logStore($log_store){
		$this->log_store = $log_store;
	}
	
	private function set_worktime($worktime_store){
		$this->worktime_store = $worktime_store;
	}
	
	//GET
	public function get_nameStore (){
		return $this->name_store;
	}
	
	public function get_latStore (){
		return $this->lat_store;
	}
	
	public function get_logStore(){
		return $this->log_store;
	}
	public function get_worktimeStore(){
		return $this->worktime_store;
	}
}