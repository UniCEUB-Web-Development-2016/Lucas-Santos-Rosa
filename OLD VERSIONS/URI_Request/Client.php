<?php
//LUCAS SANTOS ROSA 21444918
//MARCO AURÉLIO VALORI 21462940
include "RequestRouter.php";
include "api.php";
(new Api)-> showInPage();
echo "<br />";
(new RequestRouter)-> route();