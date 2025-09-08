<?php
error_reporting(0);
session_start();
include('config.php');
if (isset($_SESSION['email']) != "") {
    header("Location: ../home.php");
}


$correo 		= $_REQUEST['email'];
$clave  		= $_REQUEST['password'];

$sqlVerificando = ("SELECT * FROM login WHERE email='".$correo."' AND password='".$clave."' ");
$QueryResul = mysqli_query($con,$sqlVerificando);

if ($row = mysqli_fetch_assoc($QueryResul)) {
	$_SESSION['estado']	= $row['estado'];
	 $_SESSION['nombre']	= $row['nombre'];
	 $_SESSION['email']	= $row['email'];
	 $_SESSION['password'] 	= $row['password'];
	 $_SESSION['idusuario']		= $row['idusuario'];
	
	echo '<meta http-equiv="refresh" content="0;url=../home.php">';
}else{
	echo '<meta http-equiv="refresh" content="0;url=../index.php?emaiIncorrecto=1">';
}
?>