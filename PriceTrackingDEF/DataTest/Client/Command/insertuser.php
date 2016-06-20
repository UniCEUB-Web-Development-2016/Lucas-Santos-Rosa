<?php
// Point to where you downloaded the phar
include('httpful.phar');


$url = "http://localhost/DataTest/request/store/?name=".$_POST['store_name'].
									"&local=".$_POST['store_local'].
									"&worktime=".$_POST['store_worktime'].
									"&email=".$_POST['store_email'].
									"&password=".$_POST['pass'];
$response = \Httpful\Request::post($url)->send();
var_dump($response);
