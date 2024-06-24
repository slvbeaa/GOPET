<?php

$host = "localhost";
$banco = "gopet";
$usuario = "root";
$pass = "usbw";

$con = new mysqli($host,$usuario,$pass,$banco);
if(!$con){
	echo "Erro de conexão!".$con->error;
}

?>