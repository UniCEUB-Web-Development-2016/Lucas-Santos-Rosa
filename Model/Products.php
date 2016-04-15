<?php

class Products{
	
	$name_product;
	$tipe_product;
	$sales_product;
	$quant_product;
	$price_product;
	
	
	public function __construct($name_product, $tipe_product, $sales_product, $quant_product, $price_product){
		$this->set_productName($name_product);
		$this->set_productTipe($tipe_product);
		$this->set_sales($sales_product);
		$this->set_quantite($quant_product);
		$this->set_price($price_product);
	}
	
	//SET
	private function set_productName ($name_product){
		$this->name_product = $name_product;
	}
	
	private function set_productTipe ($tipe_product){
		$this->tipe_product = $tipe_product;
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
	
	//GET
	public function get_productName (){
		echo $name_product;
	}
	
	public function get_productTipe (){
		echo $tipe_product;
	}
	
	public function get_sales(){
		echo $sales_product;
	}
	
	public function get_quant(){
		echo $quant_product;
	}
	
	public function get_price(){
		echo $price_product;
	}
}