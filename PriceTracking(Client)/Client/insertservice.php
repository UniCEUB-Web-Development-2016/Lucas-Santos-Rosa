<?php
include('httpful.phar');

$url = "http://localhost/request/services/?name=".$_POST['service_name'].
									"&type=".$_POST['service_type'].
									"&time=".$_POST['service_time'].
									"&price=".$_POST['service_price'];

$response = \Httpful\Request::post($url)->send();
var_dump($response);