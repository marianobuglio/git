<?php 

$host = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "php";

$conexion = new mysqli($host,$usuario,$contraseña,$bd);

if($conexion->connect_errno){
	echo "no se puede conectar a la base de datos";
	exit();
}


?>