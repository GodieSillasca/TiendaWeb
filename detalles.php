
	<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Detalles del producto</title>
</head>
<header>
  

</header>
<body class="black">
<div class="container cyan lighten-1">
<?php 

				include 'conexion.php';
				$re=mysqli_query($mysqli,"select * from productos where id=".$_GET['id']) or die (mysqli_error('keweaermano'));
				while ($f=mysqli_fetch_array($re)) {
					?>	
					
					<div class="card">
					    <div class="card-image">
					      <img src="./img/<?php echo $f['imagen'];?>" height="20" width="auto" class="responsive-img">
					      <span class="card-title"></span>
					    </div>
					    <div class="card-content">
					      <h2 class="card-panel lime lighten-1"><span>Precio: $<?php echo $f['precio'];?></span><br></h2>
					      <h2><?php echo $f['descripcion'];?></h2>
					      <p>Descripción: <?php echo $f['descripcion'];?></p>
					    </div>
					    <div class="card-action">
							<a href="carritodecompras.php?id=<?php echo $f['id'];?>">Añadir al carrito de de compras</a>
					    </div>
					  </div>
					
					<?php 
				}
				?>	
				<center><a href="./bienvenido.php">Volver al catálogo</a></center>   
<div class="row card-panel grey lighten-3">
  <p class="card-panel lime lighten-1"><a href="logout.php">Cerrar Sesión</a><a class="right" href="contacto.html">Contactanos</a></p>
</div>
</body>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</html>


