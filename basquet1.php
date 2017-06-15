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
				<h2>Cancha de Basquet #1</h2>
				<p>
				<a href="index.php" class="btn btn-warning">Volver a Inicio</a>
				<a href="basquet1.php" class="btn btn-primary active">Cancha Basquet #1</a>
				<a href="basquet2.php" class="btn btn-success">Cancha Basquet #2</a>
				<a href="volley1.php" class="btn btn-danger">Cancha Volley #1</a>
				<a href="volley2.php" class="btn btn-info">Cancha Volley #2</a>
					<!--Inicia Tabla -->
				<h3> Arrienda una cancha</h3>
				<div class="container">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-condensed ">
						<tr class="info">
							<th>Hora / Día</th>
							<th>Lunes</th>
							<th>Martes</th>
							<th>Miércoles</th>
							<th>Jueves</th>
							<th>Viernes</th>
							<th>Sábado</th>
						</tr>
						<tr>
							<td>08:00 - 09:00</td>
							<td>
								<div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value="" disabled="">No disponible</label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>09:00 - 10:00</td>
							<td>
								<div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value="" disabled="">No disponible</label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>10:00 - 11:00</td>
							<td>
								<div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value="" disabled="">No disponible</label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>11:00 - 12:00</td>
							<td>
								<div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value="" disabled="">No disponible</label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>12:00 - 13:00</td>
							<td>
								<div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value="" disabled="">No disponible</label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>13:00 - 14:00</td>
							<td>
								<div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value="" disabled="">No disponible</label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>14:00 - 15:00</td>
							<td>
								<div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value="" disabled="">No disponible</label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
						</tr>
						<tr>
							<td>15:00 - 16:00</td>
							<td>
								<div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value="" disabled="">No disponible</label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
							<td><div class="checkbox-incline">
									<label><input type="checkbox" value=""></label>
								</div>
							</td>
						</tr>
					</table>
					</div>
					
				</div>	
			</article>
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