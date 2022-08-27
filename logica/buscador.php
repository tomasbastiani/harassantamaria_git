<?php  
require 'conexion.php';

$dni1 = $_POST['buscar_factura'];
$nlote1 = $_POST['buscar_lote'];

$query = ("SELECT dni, nlote, mes, linkfactura FROM facturas_buscador WHERE dni = '$dni1' AND nlote = '$nlote1' ORDER BY id ASC") or die(mysqli_error());
        $result=mysqli_query($conexion, $query);
      

        while ($mostrar=mysqli_fetch_array($result)) {
                ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' type='text/css' href='../login.css'>
  <link rel='preconnect' href='https://fonts.gstatic.com'>
  <link href='https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@500&family=Teko&display=swap' rel='stylesheet'>
	<script
  src='https://code.jquery.com/jquery-3.5.1.js'
  integrity='sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc='
  crossorigin='anonymous'></script>
  <script src = '../pace-master/pace.min.js' type = 'text/javascript'> </script>
  <script src = '../pace-master/pace.js' type = 'text/javascript'> </script>
  <link rel='stylesheet' type='text/css' href='../pace-master/themes/green/pace-theme-flat-top.css'>
</head>
<body>
	<?php include_once '../header.php' ?>
<br><br><br>
	<table border="6" style="margin-left: auto; margin-right: auto; width: 960px;">
       		<?php  
       			include_once 'th.html';
       		?>
        <tr>
        	<td style="text-align: center; width: 200	x;"><?php echo $mostrar['mes'];  ?></td>     	
        	<td style="text-align: center; width: 200px;"><?php echo $mostrar['dni'];  ?></td>
        	<td style="text-align: center; width: 80px;"><?php echo $mostrar['nlote'];  ?></td>
        	<td style="width: 200px;">
        		<a href="<?php echo $mostrar['linkfactura'];?>" target = blank><button style="margin-left: auto; margin-right: auto; align-content: center;">Haga click aquí para ver su factura</button></a>
			</td>
        	</tr>
</table>		
<?php } ?>	
<br><br><br>
        <?php include_once("cerrarsesion.html");
      ?>