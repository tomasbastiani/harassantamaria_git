<?php  
require 'conexion.php';

session_start();

$dni = $_SESSION['dni'];


$query = ("SELECT dni, depto, mes, linkfactura FROM facturas_buscador WHERE dni = '$dni' ORDER BY depto ASC") or die(mysqli_error());
        $result=mysqli_query($conexion, $query);
      
        ?>
       
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' type='text/css' href='../login.css'>
  <link rel='preconnect' href='https://fonts.gstatic.com'>
  <link href='https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@500&family=Teko&display=swap' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <script src = '../pace-master/pace.min.js' type = 'text/javascript'> </script>
  <script src = '../pace-master/pace.js' type = 'text/javascript'> </script>
  <link rel='stylesheet' type='text/css' href='../pace-master/themes/green/pace-theme-flat-top.css'>
  <style>
    td{
      width: 100px;
    }
  </style>
</head>
<body>
  <header>
  <img src="" class="logo">
  <h1>Troazzi</h1>       
  </header>
  <br><br>
<?php while ($mostrar=mysqli_fetch_array($result)) { ?>
  <br>

	<table border="6" style="margin-left: auto; margin-right: auto; width: 960px;">
       		<?php  
       			include_once 'th.html';
       		?>
        <tr>
        	<td><?= $mostrar['mes']; ?></td>     	
        	<td><?= $mostrar['dni']; ?></td>
        	<td><?= $mostrar['depto']; ?></td>
        	<td>
        		<a href="<?php echo $mostrar['linkfactura'];?>" target = blank><button>Haga click aquí para ver su factura</button></a>
			</td>
        	</tr>
</table>		
<?php } ?>	
<br><br>
        <div style="height: 100px; width: 960px; margin-left: auto; margin-right: auto;">
            <div style="float: left; margin-left: 80px; margin-top: 25px; width: 40%; height: 60px;">
          <a href="editar_pass.php"><button style="margin-left: 150px; margin-right: auto;">Cambiar contraseña</button></a>
            </div>
        <br>
            <div style="float: right; width: 40%; height: 60px;">
        <?php include_once("cerrarsesion.html");?>
            </div>
        </div>
