<?php 
session_start();
ob_start();
if($_SESSION['registrado']<>1){
header('Location:login.php'); 
}
 ?> 
