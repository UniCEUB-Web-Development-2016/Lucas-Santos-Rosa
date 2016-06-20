<?php
include('httpful.phar');

$url = "http://localhost/DataTest/request/products/?name=".$_POST['product_name'].
									"&type=".$_POST['product_type'].
									"&sales=".$_POST['product_sales'].
									"&quant=".$_POST['product_quant'].
									"&price=".$_POST['product_price'];
									"&ref=".$_POST['reference'];

$response = \Httpful\Request::put($url)->send();
var_dump($response);
