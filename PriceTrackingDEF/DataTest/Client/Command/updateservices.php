<?php
include('httpful.phar');

$url = "http://localhost/DataTest/request/services/?name=".$_POST['services_name'].
									"&type=".$_POST['services_type'].
									"&time=".$_POST['services_time'].
									"&price=".$_POST['services_price'].
									"&ref=".$_POST['reference'].
									"&refn=".$_POST['referenceName'];
									
$response = \Httpful\Request::put($url)->send();
var_dump($response);