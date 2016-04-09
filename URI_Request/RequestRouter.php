<?php
//LUCAS SANTOS ROSA 21444918
//MARCO AURÉLIO VALORI 21462940
include "Request.php";
class RequestRouter
{
	
	public function route()
	{
		$r = new Request($_SERVER["SERVER_PROTOCOL"],
			    $_SERVER["REQUEST_METHOD"],
			    $_SERVER["REQUEST_URI"],
			    $_SERVER["SERVER_NAME"],
			    $_SERVER["SERVER_ADDR"]);
		
		$this->executeRequest($r);
	}
	
	public function executeRequest($request)
	{
		$uri = $request->get_uri();
		echo $this->getParameters($uri);
	}
	
	public function getResource($actions)
	{
		//strpos
	}
	
	public function getParameters($uri)
	{
	    $a = explode('?', $uri);
		print_r($a[1]);
	}
}