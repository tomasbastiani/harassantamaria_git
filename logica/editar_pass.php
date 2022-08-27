<?php  
	
	session_start();

		if(isset($_POST['editar_pass'])){
		require 'conexion.php';
		$dni = $_SESSION['dni'];
		$password = $_SESSION['password'];



		$passActual = mysqli_real_escape_string($conexion, $_POST['passActual']);
		$passNueva = mysqli_real_escape_string($conexion, $_POST['passNueva']);
		$passNueva2 = mysqli_real_escape_string($conexion, $_POST['passNueva2']);
			


		$sqlA = mysqli_query($conexion, "SELECT password from login where dni = '$dni'");
		$rowA = $sqlA->fetch_array();

		if ($rowA['password'] == $passActual) {

			if ($passNueva == $passNueva2) {

				$update = mysqli_query($conexion, "UPDATE login SET password = '$passNueva' WHERE dni = '$dni'");
				if ($update) {echo "<strong style='color: green;'>Se ha actualizado su contraseña</strong>";}
			}
			else{
				echo "<strong style='color: red;'>Las contraseñas no coinciden</strong>";
			}
		}

			else{
			echo "<strong style='color: red;'>Tu contraseña actual no coincide</strong>";
		}
	}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="shortcut icon" href="../img/favicon.png">
	<link rel="stylesheet" type="text/css" href="..\login.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Saira+Condensed:wght@300&display=swap" rel="stylesheet">
	<title>Cambio de Password</title>
</head>
<header>
	<img src="../img/hsm.png">      
</header>
<div id="imagen">
        <br>
<body>
	<h3>Cambio de Contraseña</h3>
	<form action="" method="POST">
		<input type="password" name="passActual" placeholder="Ingrese su contraseña actual">
		<input type="password" name="passNueva" placeholder="Ingrese su nueva contraseña">
		<input style="" type="password" name="passNueva2" placeholder="Ingrese nuevamente su contraseña"><br>
		<input type="submit" value="Cambiar Contraseña" name="editar_pass">
	</form>
	<div>
        <a href="../bienvenido.html"><button>Volver</button></a>
		<a href="salir.php"><button>Cerrar Sesión</button></a>
	</div>
</div>
</body>
</html>
