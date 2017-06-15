<?php
require_once("clases/canchas.php");
$u=new Canchas();
$datos=$u->getDatos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gimnasio de Recoleta - I. Muni. de Recoleta</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Portal Gimnasio Recoleta</a>
			</div>
			<!--Inicia Menu -->
			<div class="collapse navbar-collapse" id="navegacion-fm">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
							Recintos <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="condor.php">Cóndor Rojas Norte</a></li>
							<li><a href="phelps.php">El Phelps</a></li>
							<li><a href="massu.php">Massu</a></li>
							<li><a href="nba.php">NBA</a></li>
							
						</ul>
					</li>
				</ul>
				<form action="" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</form>
			</div>

		</div>

	</nav>
	</header>
	
	<section class="jumbotron">
		<div class="container">
			<h1>Portal Gimnasio de Recoleta </h1>
			<p>Ilustre Municipalidad de Recoleta</p>
		</div>
	</section>
	
	<div class="container">
		<div class="main row">
			<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
				<p>
					<h3>Recinto MASSU</h3>
					<p>En honor al doble medallista olímpico Nicolas Massu, contamos con dos canchas de archilla de tenis para los futuros Nico's Massu's.<br/><b/>
					<img src="tenis2.jpg" class="img-responsive" alt="Imagen de la cancha de tenis">
					</p>
					<h2>Sistema de Arriendo de Canchas </h2>
					<!-- Botones para las canchas -->
					              <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id_cancha</th>
                            <th>id_gym</th>
                            <th>Nombre</th>
                            <th>Precio</th>
							<th>Horarios</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
						
                        foreach($datos as $dato){
                            ?>
                            <tr>

                                <td><?php echo $dato->id_cancha?> </td>
                                <td><?php echo $dato->id_gym?> </td>
                                <td><?php echo $dato->Nombre?> </td>
                                <td><?php echo $dato->Precio?> </td>
								<td><FORM>
									<input name="button2" type="button" value="Ver Disponibilidad" />
									</FORM>
								</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                
              </div>
					<br></br>
					<br></br>	

			</article>
		
			<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					<h3>Navegación</h3>
					<div class="list-group">
							<a href="index.php" class="list-group-item">Inicio</a>
					<h3>Recintos</h3>
							<a href="condor.php" class="list-group-item">Cóndor Rojas Norte</a>
							<a href="phelps.php" class="list-group-item">El Phelps</a>
							<a href="massu.php" class="list-group-item active">Massu</a>
							<a href="nba.php" class="list-group-item">NBA</a>
					</div>
				
			</aside>
		</div>

	<footer>
		<div class="container">
			<h3>Portal Gimnasio de Recoleta - Todos los derechos reservados.</h3>
			
		</div>
	</footer>
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>