<?php
require 'conexion.php';

session_start();

$dni = $_SESSION['dni'];
$nlote = $_POST['nlote_buscar'];
$mes = $_POST['xmes'];
$where='';

if(isset($_POST['buscar'])){
  if (empty($nlote) && empty($mes)){
    $where = '';
  }
  else if (!empty($nlote) && empty($mes)){
    $where = "AND nlote = '$nlote'";
  }
  else if (empty($nlote) && !empty($mes)){
    $where = "AND mes = '$mes'";
  }
   else  {
    $where = "AND nlote = '$nlote' AND mes = '$mes'";
  }
}

$sql = ("SELECT dni, nlote, mes, linkfactura, gastocomun 
        FROM facturas_buscador 
        WHERE dni = '$dni' $where
        ORDER BY mes ASC");

$result=mysqli_query($conexion, $sql);?>

<!DOCTYPE html>
<html>
<head>
	<title>Haras Santa María</title>
  <link rel="shortcut icon" href="../img/favicon.png">
  <meta charset="utf-8">
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
    <img src="../img/hsm.png">       
  </header>
  <div id="imagen">
        <br>
  <br>

<?php 
while ($mostrar=mysqli_fetch_array($result)) {
  if(!$mostrar){
    echo 'El lote no pertenece a su DNI';
  }
  else{
    ?>
  <br>

	<table>
       		<?php  
       			include_once 'th.html';
       		?>
        <tr>
        	<td><?= $mostrar['mes']; ?></td>     	
        	<td><?= $mostrar['dni']; ?></td>
        	<td><?= $mostrar['nlote']; ?></td>
        	<td>
        		<a href="<?php echo $mostrar['linkfactura'];?>" style="text-align: center;" target = blank><button >Carta</button></a>
		      </td>
          <td>
        		<a href="<?php echo $mostrar['gastocomun'];?>" style="text-align: center;" target = blank><button>Liquidación</button></a>
		      </td>
        	</tr>
</table>		
<?php } }?>	
<br><br>
<div id="botones">
    <div id="volver">
         <a href="../buscar.html"><button>Volver</button></a>
    </div>
    <div id="cerrarsesion">
         <a href="salir.php"><button>Cerrar Sesión</button></a></div>
    </div>
</div>
</body>
</html>        
