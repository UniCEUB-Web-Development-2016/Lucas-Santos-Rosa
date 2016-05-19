<?php
include_once "Classes and Objects/Request_PolosUAB.php";
include_once "ControlManager/UserController.php";
include_once "ControlManager/PolosUAB_Controller.php";
include_once "ControlManager/Courses_Controller.php";

class ResourceController
{
	private $controlMap = 
	[	"user" => "UserController",
		"polosuab" => "PolosUAB_Controller",
		"course" => "Courses_Controller"];
	
	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}
	public function searchResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->search($request);
	}
	public function deleteResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->ReqDelete($request);
	}
	public function updateResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->update($request);
	}	
}
