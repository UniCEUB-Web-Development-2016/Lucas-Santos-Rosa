<?php

include "User.php";

$modelo = new User($_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['senha'],$_POST['data'],$_POST['genero']);
$modelo->savetofile();