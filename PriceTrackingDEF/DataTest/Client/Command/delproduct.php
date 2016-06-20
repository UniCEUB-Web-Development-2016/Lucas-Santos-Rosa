<?php
include('httpful.phar');

$url = "http://localhost/DataTest/request/products/?name=".$_POST['product_name'].
									"&type=".$_POST['product_type'].
									"&sales=".$_POST['product_sales'].
									"&quant=".$_POST['product_quant'].
									"&price=".$_POST['product_price'].
									"&codStore=".$_POST['codStore'];

$response = \Httpful\Request::delete($url)->send();
var_dump($response);
