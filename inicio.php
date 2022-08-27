<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' type='text/css' href='login.css'>
	<link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@500&family=Teko&display=swap' rel='stylesheet'>	
</head>
<body>
<header>
        <h1>Haras Santa María</h1>
        <img src='img/logohsm.jpg' class='logo'>
</header>
<h2 style = 'margin-bottom: -10px;' class = 'h2Bienvenido'>BIENVENIDO!!!</h2><br>
<h3 style = 'margin-bottom: -10px;' class = 'h3Buscar'>Busque sus facturas ingresando su DNI y número de lote</h3><br>


<form action = 'logica/buscador.php' method = 'POST'>
<input type='text' name='buscar_factura' placeholder='Escriba aquí su DNI*' class = 'buscador'>
<input type='text' name='buscar_lote' placeholder='Escriba aquí su Nº de Lote*' class = 'buscador'><br>
<input type='submit' name='buscar' value='Buscar' onclick='pedirContraseña()'><br>
</form>
<div class = 'buttons'> 
<a href='logica/salir.php'><button class='boton_factura'>Cerrar Sesión</button></a><br><br>
</div>
</body>
</html>