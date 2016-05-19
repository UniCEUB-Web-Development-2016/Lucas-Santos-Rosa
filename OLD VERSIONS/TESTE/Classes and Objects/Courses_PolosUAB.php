<?php
class courses_PolosUAB{
	
	private $id_course;
	private $name_course;
	private $type_course;
	private $year_course;//inserted now to link with offers of the polo by year
	private $students_course;//how many students per course
		
	public function __construct($id_course, $name_course, $type_course, $year_course, $students_course){
		$this->set_courseId($id_course);
		$this->set_courseName($name_course);
		$this->set_coursetype($type_course);
		$this->set_year($year_course);
		$this->set_students($students_course);
	}
	
	
	
	private function set_courseId ($id_course){
		$this->id_course = $id_course;
	}
	
	private function set_courseName ($name_course){
		$this->name_course = $name_course;
	}
	
	private function set_coursetype ($type_course){
		$this->type_course = $type_course;
	}
	
	private function set_year($year_course){
		$this->year_course = $year_course;
	}
	
	private function set_students($students_course){
		$this->students_course = $students_course;
	}
	
	
	
	public function get_courseId (){
		return $this->id_course;
	}
	
	public function get_courseName (){
		return $this->name_course;
	}
	
	public function get_coursetype (){
		return $this->type_course;
	}
	
	public function get_year(){
		return $this->year_course;
	}
	
	public function get_students(){
		return $this->students_course;
	}
	
}
