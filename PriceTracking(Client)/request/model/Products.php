<?php

class Products{
	
	private $name_product;
	private $type_product;
	private $sales_product;
	private $quant_product;
	private $price_product;
	private $codStore;
	
	
	public function __construct($name_product, $type_product, $sales_product, $quant_product, $price_product, $codStore){
		$this->set_productName($name_product);
		$this->set_productType($type_product);
		$this->set_sales($sales_product);
		$this->set_quant($quant_product);
		$this->set_price($price_product);
		$this->set_codStore($codStore);
	}
	
	//SET
	private function set_productName ($name_product){
		$this->name_product = $name_product;
	}
	
	private function set_productType ($type_product){
		$this->type_product = $type_product;
	}
	
	private function set_sales($sales_product){
		$this->sales_product = $sales_product;
	}
	
	private function set_quant($quant_product){
		$this->quant_product = $quant_product;
	}
	
	private function set_price($price_product){
		$this->price_product = $price_product;
	}
	
	private function set_codStore($codStore){
		$this->codStore = $codStore;
	}
	
	//GET
	public function get_productName (){
		return $this->name_product;
	}
	
	public function get_productType (){
		return $this->type_product;
	}
	
	public function get_sales(){
		return $this->sales_product;
	}
	
	public function get_quant(){
		return $this->quant_product;
	}
	
	public function get_price(){
		return $this->price_product;
	}
	
	public function get_codStore(){
		return $this->codStore;
	}
	
}