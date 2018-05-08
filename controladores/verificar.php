<?php 
include('conexion.php');

session_start();
ob_start();
$_SESSION['registrado'] = 0;

if (isset($_POST['user'])) {
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];





if($user== "" || $pass == "")
{
$_SESSION['registrado'] = 2; //2 error campos vacios;

		echo "algo vacio";

}else{

	$resultado = $conexion->query("SELECT * FROM usuario where usuario = '$user' and pass = '$pass' ");
	 if ($resultado->num_rows > 0) {
	 		$_SESSION['registrado'] = 1;
	 	header('Location:../index.php');
	 	}else{
	 		$_SESSION['registrado'] = 3;
	 	}	
}

if ($_SESSION['registrado'] <> 1) {
	header('Location:../login.php');
}
}

 ?>