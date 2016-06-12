<?php
// Point to where you downloaded the phar
include('httpful.phar');


$url = "http://localhost/DataTest/request/store/?name=".$_POST['store_name'].
									"&lat=".$_POST['store_lat'].
									"&log=".$_POST['store_log'].
									"&worktime=".$_POST['store_worktime'].
									"&email=".$_POST['store_email'].
									"&password=".$_POST['pass'];
$response = \Httpful\Request::post($url)->send();
var_dump($response);

// And you're ready to go!
//$response = \Httpful\Request::get('http://localhost/request/user/?first_name=sorte')->send();
//$request_response = json_decode($response->body);
//foreach($request_response as $value)
//{
//	echo $value->first_name . '<br>';
//	echo '<div class="checkbox">
 //         <label>
//            <input type="checkbox" value="remember-me"> Remember me
 //         </label>
//        </div>';
//}