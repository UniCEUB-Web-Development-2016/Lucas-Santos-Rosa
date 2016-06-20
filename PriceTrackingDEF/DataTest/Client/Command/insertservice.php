<?php
include('httpful.phar');

$url = "http://localhost/DataTest/request/services/?name=".$_POST['service_name'].
									"&type=".$_POST['service_type'].
									"&time=".$_POST['service_time'].
									"&price=".$_POST['service_price'].
									"&codStore=".$_POST['codStore'];

$response = \Httpful\Request::post($url)->send();
var_dump($response);