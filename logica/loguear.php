<?php
require 'conexion.php';  
session_start();


$dni = $_POST['dni'];
$password = $_POST['password'];
$_SESSION['dni'] = $dni;
$_SESSION['password'] = $password;


$sql = "SELECT count(*) as contar FROM login WHERE dni = '$dni' AND password = '$password'";

$consulta = mysqli_query($conexion, $sql);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0) {
	$_SESSION['dni'] = $dni;
	header("location: ../paginaprincipal.php");	
}
else{
	header("location: ../datosincorrectos.php");
}


?>