<!DOCTYPE html>
<html>
<head>
	<title>Papus Login</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	
</head>

<body>
<!--Cabecera- Se separará espacio para el input de busqueda antes de la cabecera de menu-->
<header class="header">
	<div class="content clearfix">
	<!--Input de buscador de la parte superior derecha-->
		<nav class="no-user">
			<div class="search_box ">
				<form action="#" id="search-box" method="get" style="display: none;">
					<label class="hidden" for="inputbusqueda">Buscar</label>
                    <input type="text" placeholder="Ingresa tu búsqueda" id="inputbusqueda" name="conte">
                    <span class="glyphicon glyphicon-search" href="#"></span>
				</form>
			</div>
		</nav>
	</div>
	<!--menu de opciones superior-->
	<nav class="main-menu">
		<div class="content">
			<div class="logo">
				<div class="edit-logo">
					<a href="inicio" title="Logo oficial de Papus Club">
						<img src="images/logo.png" alt="Logo Papus Club" href="inicio.html">
					</a>
				</div>
			</div>
			<!--Opciones de menu-->
			<nav class="menu" id="menu" style="display: none">
				<ul>
					<li><a href="#">PAPUS CLUB<span class="despliegue">▼</span></a>
						<ul>
							<li><a href="historia-papusclub" title="A cerca del club" target="_self">Acerca del Club</a></li>
							<li><a href="#" title="Mesa directiva" target="_self">Mesa Directiva</a></li>
							<li><a href="#" title="Reglas del club" target="_self">Reglamento del Club</a></li>
						</ul>
					</li>
					<!-- Sedes -->
					<li><a href="#">SEDES<span class="despliegue">▼</span></a>
						<ul>
							<li><a href="#" title="Callao" target="_self">Callao<span class="despliegue">▼</span></a>
								<ul>
									<li><a href="#" title="Concesiones" target="_self">Concesiones</a></li>
									<li><a href="#" title="Servicios" target="_self">Servicios</a></li>
									<li><a href="#" title="Bungalows" target="_self">Bungalows</a></li>
								</ul>
							</li>
							<li><a href="#" title="Surquillo" target="_self">Surquillo<span class="despliegue">▼</span></a>
								<ul>
									<li><a href="#" title="Concesiones" target="_self">Concesiones</a></li>
									<li><a href="#" title="Servicios" target="_self">Servicios</a></li>
									<li><a href="#" title="Bungalows" target="_self">Bungalows</a></li>
								</ul>						
							</li>
							<li><a href="#" title="Barranco" target="_self">Barranco<span class="despliegue">▼</span></a>
								<ul>
									<li><a href="#" title="Concesiones" target="_self">Concesiones</a></li>
									<li><a href="#" title="Servicios" target="_self">Servicios</a></li>
									<li><a href="#" title="Bungalows" target="_self">Bungalows</a></li>
								</ul>						
							</li>
						</ul>
					</li>
					<!-- Opción Actividades -->
					<li><a href="#">ACTIVIDADES<span class="despliegue">▼</span></a>
						<ul>
							<li><a href="#" title="Actividad 1" target="_self">Talleres<span class="despliegue">▼</span></a>
								<ul>
									<li><a href="#" title="Actividad 1.1" target="_self">Actividad 1.1</a></li>
									<li><a href="#" title="Actividad 1.2" target="_self">Actividad 1.2</a></li>
									<li><a href="#" title="Actividad 1.3" target="_self">Actividad 1.3</a></li>
								</ul>
							</li>
							<li><a href="#" title="Actividad 2" target="_self">Actividad 2<span class="despliegue">▼</span></a>
								<ul>
									<li><a href="#" title="Actividad 2.1" target="_self">Actividad 2.1</a></li>
									<li><a href="#" title="Actividad 2.2" target="_self">Actividad 2.2</a></li>
									<li><a href="#" title="Actividad 2.3" target="_self">Actividad 2.3</a></li>
								</ul>						
							</li>
							<li><a href="#" title="Actividad 3" target="_self">Actividad 3<span class="despliegue">▼</span></a>
								<ul>
									<li><a href="#" title="Actividad 3.1" target="_self">Actividad 3.1</a></li>
									<li><a href="#" title="Actividad 3.2" target="_self">Actividad 3.2</a></li>
									<li><a href="#" title="Actividad 3.3" target="_self">Actividad 3.3</a></li>
								</ul>						
							</li>
						</ul>					
					</li>
					<!-- Opción Eventos -->
					<li><a href="#">EVENTOS<span class="despliegue">▼</span></a>
						<ul>
							<li><a href="#" title="Evento 1" target="_self">Evento 1<span class="despliegue">▼</span></a>
								<ul>
									<li><a href="#" title="Evento 1-1" target="_self">Evento 1.1</a></li>
									<li><a href="#" title="Evento 1-2" target="_self">Evento 1.2</a></li>
									<li><a href="#" title="Evento 1-3" target="_self">Evento 1.3</a></li>
								</ul>
							</li>
							<li><a href="#" title="Evento 2" target="_self">Evento 2<span class="despliegue">▼</span></a>
								<ul>
									<li><a href="#" title="Evento 2-1" target="_self">Evento 2.1</a></li>
									<li><a href="#" title="Evento 2-2" target="_self">Evento 2.2</a></li>
									<li><a href="#" title="Evento 2-3" target="_self">Evento 2.3</a></li>
								</ul>						
							</li>
							<li><a href="#" title="Evento 3" target="_self">Evento 3<span class="despliegue">▼</span></a>
								<ul>
									<li><a href="#" title="Evento 3-1" target="_self">Evento 3.1</a></li>
									<li><a href="#" title="Evento 3-2" target="_self">Evento 3.1</a></li>
									<li><a href="#" title="Evento 3-3" target="_self">Evento 3.1</a></li>
								</ul>						
							</li>
						</ul>
					</li>
					<!-- Opción Login -->
					<li><a href="#">LOGIN <span class="glyphicon glyphicon-user"></span> </a></li>
				</ul>
			</nav>
		</div>
	</nav>
</header>

<!---Cuerpo -->

<main class="main">
	<div class="content" style="max-width: 100%;">
	<div class="container login-box">
		<form action="" class="form-horizontal ">
				<div class="form-group text-left ">
					<br/>
					<label for="Usuario" class="control-label col-sm-2 col-sm-offset-2 lead"><strong>Usuario:</strong></label>
					<div class="col-sm-5">
						<input type="text" class="form-control" placeholder="Ingrese su tarjeta de socio o correo electronico">
					</div>
				</div>			
				<div class="form-group">
					<br/>
					<label for="Contraseña" class="control-label col-sm-2 col-sm-offset-2 lead"><strong>Contraseña:</strong></label>
					<div class="col-sm-5">
						<input type="text" class="form-control" placeholder="Ingrese su contraseña">
					</div>
				</div>		
				<div class="form-group text-center">
					<button class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-log-in"> </span> Ingresar</button>
				</div>	
				<div class="container">
					<div class="row">
						<div class="col-sm-8 text-right">
							<a class="btn btn-link login-links" href="#"><strong>¿No recuerdas tu contraseña?</strong></a>			
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8 text-right">
							<a class="btn btn-link login-links" href="#"><strong>¿Es usted nuevo socio?</strong></a>
						</div>	
					</div>
					<br/>
					<br/>
				</div>
		</form>
	</div>
	</div>
</main>

<!--Pie de págna-->

<footer class="footer">
	<div class="content clearfix">
		<div class="footer-1">
			<div class="logofoot">
				<img alt="Papus Club" src="images/logo-min.png" title="Papus Club">				
			</div>
			<div class="contacto">
				<ul class="info">
					<li><a href="#" title="telefono">(51) 1 523 4910</a></li>
					<li><span><img class="PointImg" src="images/punto.png" width="3px" height="3px"></img></span></li>
					<li><a href="#" title="e-mail">papus@clubpapus.org.pe</a></li>
				</ul>
				<ul class="terminos-condiciones">
					<li><a href="#" title="Terminos y Condiciones">TÉRMINOS Y CONDICIONES</a></li>
					<li><span><img class="PointImg" src="images/punto.png" width="3px" height="3px"></img></span></li>
					<li><a href="#" title="Privacidad">PRIVACIDAD</a></li>
					<li><span><img class="PointImg" src="images/punto.png" width="3px" height="3px"></img></span></li>
					<li><a href="#" title="MAPA DE SITIO">MAPA DE SITIO</a></li>
				</ul>
				
			</div>
		</div>
	</div>
</footer>

<!-- JQuery -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- BXSlider -->
	<script src="js/jquery.bxslider.min.js"></script>
	<!-- Mis Scripts -->
	<script src="js/MisScripts.js"></script>
</body>
</html>