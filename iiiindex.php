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
	<?php 
		require("conexion.php");
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
	?>
	
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
				<a href="index.html" class="navbar-brand">Portal Gimnasio Recoleta</a>
			</div>
			<!--Inicia Menu -->
			<div class="collapse navbar-collapse" id="navegacion-fm">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Inicio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
							Recintos <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="condor.html">Cóndor Rojas Norte</a></li>
							<li><a href="phelps.html">El Phelps</a></li>
							<li><a href="massu.html">Massu</a></li>
							<li><a href="nba.html">NBA</a></li>
							
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
					<h3>Nuestro gimnasio, cuidémoslo!</h3>
					<p>El gimnasio de Recoleta posee 4 grandes recintos deportivos: <br/><br/>
					<div class="row">
					<div class="col-md-6">
					<a title="Condor Rojas Norte" href="condor.html"><img src="condoro.png" alt="Canchas Condor Rojas" height="200" width="200"></br>
					<a href="condor.html"><b>CÓNDOR ROJAS NORTE:</b></a>con 2 canchas de fútbol <br/></br></br>
					<a title="El Phelps" href="phelps.html"><img src="piscina.jpg" alt="El Phelps" height="200" width="200"></br>
					<a href="phelps.html"><b>EL PHELPS:</b></a>con 1 piscina olímpica de último nivel<br/></br></br></div>
					<div class="col-md-6">
					
					<a title="Massu" href="massu.html"><img src="tenis.jpg" alt="Massu" height="200" width="200"></br>
					<a href="massu.html"><b>MASSU:</b></a>con 4 canchas de tenis.<br/></br></br>
					<a title="NBA" href="nba.html"><img src="basquet.jpg" alt="NBA" height="200" width="200"></br>
					<a href="nba.html"><b>NBA:</b></a>con 2 canchas de basket y 2 de volley.<br/></br></br></div>
					</div>
					</p>
			</article>
		
			<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					<h3>Navegación</h3>
					<div class="list-group">
							<a href="index.html" class="list-group-item active">Inicio</a>
					<h3>Recintos</h3>
							<a href="condor.html" class="list-group-item ">Cóndor Rojas Norte</a>
							<a href="phelps.html" class="list-group-item">El Phelps</a>
							<a href="massu.html" class="list-group-item">Massu</a>
							<a href="nba.html" class="list-group-item">NBA</a>
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