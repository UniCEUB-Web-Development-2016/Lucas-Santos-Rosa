<?php

include "Connection.php";

$connect = (new Connection("mysql", "localhost", "mysql", "root", ""))->getConnect();
$info = $connect->query("SELECT * FROM db");
var_dump($info->fetchAll(PDO::FETCH_ASSOC));

