<?php
include('httpful.phar');

$url = "http://localhost/request/products/?name=".$_POST['product_name'].
									"&type=".$_POST['product_type'].
									"&sales=".$_POST['product_sales'].
									"&quant=".$_POST['product_quant'].
									"&price=".$_POST['product_price'];

$response = \Httpful\Request::post($url)->send();
var_dump($response);