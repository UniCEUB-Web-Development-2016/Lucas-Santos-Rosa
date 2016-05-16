<?php
include_once "model/Request.php";

include_once "control/UserController.php";
include_once "control/ServicesController.php";
include_once "control/ProductsController.php";
include_once "control/StoreController.php";

class ResourceController
{
	private $controlMap = 
	[	"user" => "UserController",
		"services" => "ServicesController",
		"store" => "StoreController",
		"products" => "ProductsController"];
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