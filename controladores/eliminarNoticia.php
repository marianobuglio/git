<?php 	
include('conexion.php');

$id = $_GET['id'];
$conexion->query("DELETE FROM noticias where id_noticia = ".$id." ");
header('Location:../index.php');


 ?>