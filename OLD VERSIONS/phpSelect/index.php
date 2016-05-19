<?php
include "Connection.php";
$connect = (new Connection("mysql", "localhost", "test", "root", ""))->getConnect();
$info = $connect->query("SELECT * FROM Teste");
var_dump($info->fetchAll(PDO::FETCH_ASSOC));