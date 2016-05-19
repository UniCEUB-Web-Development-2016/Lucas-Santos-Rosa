<?php
//LUCAS SANTOS ROSA 21444918
//MARCO AURÉLIO VALORI 21462940
class Api{
	private function get_student_info($id){
    
		$student_info = array();
    
		switch($id){
			case 1:
				$student_info = array("Dale", "Cooper", "123 Main St Yakima, WA"); 
				break;
			case 2:
				$student_info = array("Harry", "Truman", "202 South St Vancouver, WA");
				break;
			case 3:
				$student_info = array("Shelly", "Johnson", "9 Pond Rd Sparks, NV");
				break;
			case 4:
				$student_info = array( "Bobby", "Briggs", "14 12th St San Diego, CA");
				break;
			case 5:
				$student_info = array("Donna", "Hayward", "120 16th St Davenport, IA");
				break;
			default:
				$student_info = array("Vazio", "Vazio", "Vazio");
		}
		
		return $student_info;
	}

	public function showInPage(){
		if(!empty($_GET["id"])){
			$id = $_GET["id"];
			print_r($this->get_student_info($id));
		}else{
			die();
		}
	}


}