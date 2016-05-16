<?php
class PolosUAB{
	
	private $id_polo;
	private $name_polo;
	private $status_polo;
	private $situation_polo;
	private $long_polo;
	private $lat_polo;
	private $uf_polo;
	private $year_polo;
	
	
	
	public function __construct($id_polo, $name_polo, $status_polo, $situation_polo, $long_polo, $lat_polo, $uf_polo, $year_polo){
		$this->set_poloId($id_polo);
		$this->set_poloName($name_polo);
		$this->set_polostatus($status_polo);
		$this->set_situation($situation_polo);
		$this->set_long($long_polo);
		$this->set_lat($lat_polo);
		$this->set_uf($uf_polo);
		$this->set_year($year_polo);
	}
	
	
	
	private function set_poloId ($id_polo){
		$this->id_polo = $id_polo;
	}
	
	private function set_poloName ($name_polo){
		$this->name_polo = $name_polo;
	}
	
	private function set_polostatus ($status_polo){
		$this->status_polo = $status_polo;
	}
	
	private function set_situation($situation_polo){
		$this->situation_polo = $situation_polo;
	}
	
	private function set_long($long_polo){
		$this->long_polo = $long_polo;
	}
	
	private function set_lat($lat_polo){
		$this->lat_polo = $lat_polo;
	}
	
	private function set_uf($uf_polo){
		$this->uf_polo = $uf_polo;
	}
	
	private function set_year($year_polo){
		$this->year_polo = $year_polo;
	}
	
	
		
	public function get_poloId (){
		return $this->id_polo;
		
	}
	
	public function get_poloName (){
		return $this->name_polo;
	}
	
	public function get_polostatus (){
		return $this->status_polo;
	}
	
	public function get_situation(){
		return $this->situation_polo;
	}
	
	public function get_long(){
		return $this->long_polo;
	}
	
	public function get_lat(){
		return $this->lat_polo;
	}
	
	public function get_uf(){
		return $this->uf_polo;
	}
	
	public function get_year(){
		return $this->year_polo;
	}
}
