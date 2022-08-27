<?php  
require 'conexion.php';

$dni1 = isset($_POST['buscar_factura']);
$nlote1 = isset($_POST['buscar_lote']);
$null = "No se encontraron resultados con los datos ingresados";

$query = ("SELECT dni, nlote, mes, linkfactura FROM facturas_buscador WHERE dni = '$dni1' AND nlote = '$nlote1' ORDER BY id ASC") or die(mysqli_error());
        $result=mysqli_query($conexion, $query);
      
        while ($mostrar=mysqli_fetch_array($result)) {
                ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' type='text/css' href='../login.css'>
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
</table><br><br>

<?php } ?>	
<br><br><br>
        <?php include_once("cerrarsesion.html");
      ?>