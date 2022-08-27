<?php  

session_start();


$dni = $_SESSION['dni'];
$nlote = $_SESSION['nlote'];

if (!isset($dni)) {
	header("location: login.php");
}
else{
	header("location: bienvenido.html");

}
?>
