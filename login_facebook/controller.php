<?php
//Lucas Santos RA21444918
//Marco Aurélio RA21462877
//Gustavo Garcia RA21462877
include "User.php";

$modelo = new User($_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['senha'],$_POST['data'],$_POST['genero']);
$modelo->savetofile();
