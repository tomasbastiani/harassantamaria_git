<!DOCTYPE html>
<html>
<head>
    <title>Haras Santa María</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@500&family=Teko&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Saira+Condensed:wght@300&display=swap" rel="stylesheet">
</head>

<header>
    <img src="img/hsm.png"> 
</header>
<body>
    <div id="imagen">
    <div class="formulario">
        <br>
<h3> INGRESO AL SISTEMA </h3>
<form action="logica/loguear.php" action="paginaprincipal.php" method="POST">
<div id="login">
        <input type="text" name="dni" placeholder="Ingrese su email">
        <input type="password" name="password" placeholder="Ingrese su contraseña" id="password">
</div>
        <input type="submit" value="Iniciar Sesion"/>    
    </form>
    </div>
        <div style="width: 900px; margin-right: auto; margin-left: auto;">
        <a href="index.html"><button>Volver</button></a>
        </div>
    </div>

</body>
</html>

<footer>
</footer>
