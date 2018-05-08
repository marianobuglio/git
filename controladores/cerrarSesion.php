<?php 
session_start();
ob_start();
$_SESSION['registrado'] = 0;
 header('Location:../login.php');

 ?>