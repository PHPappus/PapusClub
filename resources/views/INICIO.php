<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	
</head>
<body>
<!--Cabecera-->
<header class="header">
	<!-- clearfix limpia el float, float permite ubicar tu componente donde desees. Adicionalmente permite utilizar más espacio de lo que realmente consume tus componentes-->
	<div class="content clearfix">
	<!--buscador superior-->
		<nav class="search">
			<div class="search_box">
				<form action="#" id="search-box" method="get">
					<label class="hidden" for="campoBusqueda">Buscar</label>
                    <input type="text" placeholder="Ingresa tu búsqueda" id="campoBusqueda" name="conte">
                    <input type="image" id="btn-buscar" alt="Enviar Búsqueda" src="images/lupa.png">
				</form>
			</div>
		</nav>
	</div>
	<!--menu-->
	<nav class="mainmenu">
		<div class="content">
			<div class="logo">
				<div class="edit-logo">
					<a href="#" title="Logo Papus Club">
						<img src="images/logo.png" alt="Papus Club">
					</a>
				</div>
			</div>
			<!--sub menus-->
			<nav class="menu" id="menu">
				<ul>
					<li><a href="#">PAPUS CLUB<span class="flecha">▼</span></a>
						<ul>
							<li><a href="historia-papusclub" title="ir a acerca del club" target="_self">Acerca del Club</a></li>
							<li><a href="#" title="ir a mesa directiva" target="_self">Mesa Directiva</a></li>
							<li><a href="#" title="ir a reglas del club" target="_self">Reglamento del Club</a></li>
						</ul>
					</li>
					<!-- Sedes -->
					<li><a href="#">SEDES<span class="flecha">▼</span></a>
						<ul>
							<li><a href="historia-sede-callao" title="ir a Callao" target="_self">Callao<span class="flecha">▼</span></a>
								<ul>
									<li><a href="#" title="ir a Concesiones" target="_self">Concesiones</a></li>
									<li><a href="#" title="ir a Servicios" target="_self">Servicios</a></li>
									<li><a href="reserva-bungalow" title="ir a Bungalows" target="_self">Bungalows</a></li>
								</ul>
							</li>
							<li><a href="#" title="ir a Surquillo" target="_self">Surquillo<span class="flecha">▼</span></a>
								<ul>
									<li><a href="#" title="ir a Concesiones" target="_self">Concesiones</a></li>
									<li><a href="#" title="ir a Servicios" target="_self">Servicios</a></li>
									<li><a href="#" title="ir a Bungalows" target="_self">Bungalows</a></li>
								</ul>						
							</li>
							<li><a href="#" title="ir a Barranco" target="_self">Barranco<span class="flecha">▼</span></a>
								<ul>
									<li><a href="#" title="ir a Concesiones" target="_self">Concesiones</a></li>
									<li><a href="#" title="ir a Servicios" target="_self">Servicios</a></li>
									<li><a href="#" title="ir a Bungalows" target="_self">Bungalows</a></li>
								</ul>						
							</li>
						</ul>
					</li>
					<!-- Actividades -->
					<li><a href="#">ACTIVIDADES<span class="flecha">▼</span></a>
						<ul>
							<li><a href="#" title="ir a cursos" target="_self">Talleres<span class="flecha">▼</span></a>
								<ul>
									<li><a href="futbol" title="ir a futbol" target="_self">Futbol</a></li>
									<li><a href="#" title="ir a subactividad 2" target="_self">Subactividad 2</a></li>
									<li><a href="#" title="ir a subactividad 3" target="_self">Subactividad 3</a></li>
								</ul>
							</li>
							<li><a href="#" title="ir a actividad 2" target="_self">Actividad 2<span class="flecha">▼</span></a>
								<ul>
									<li><a href="#" title="ir a subactividad 1" target="_self">Subactividad 1</a></li>
									<li><a href="#" title="ir a subactividad 2" target="_self">Subactividad 2</a></li>
									<li><a href="#" title="ir a subactividad 3" target="_self">Subactividad 3</a></li>
								</ul>						
							</li>
							<li><a href="#" title="ir a actividad 3" target="_self">Actividad 3<span class="flecha">▼</span></a>
								<ul>
									<li><a href="#" title="ir a subactividad 1" target="_self">Subactividad 1</a></li>
									<li><a href="#" title="ir a subactividad 2" target="_self">Subactividad 2</a></li>
									<li><a href="#" title="ir a subactividad 3" target="_self">Subactividad 3</a></li>
								</ul>						
							</li>
						</ul>					
					</li>
					<!-- Eventos -->
					<li><a href="#">EVENTOS<span class="flecha">▼</span></a>
						<ul>
							<li><a href="cultural" title="ir a evento cultural" target="_self">Cultural<span class="flecha">▼</span></a>
								<ul>
									<li><a href="#" title="ir a subevento 1" target="_self">Subevento 1</a></li>
									<li><a href="#" title="ir a subevento 2" target="_self">Subevento 2</a></li>
									<li><a href="#" title="ir a subevento 3" target="_self">Subevento 3</a></li>
								</ul>
							</li>
							<li><a href="#" title="ir a evento 2" target="_self">Evento 2<span class="flecha">▼</span></a>
								<ul>
									<li><a href="#" title="ir a subevento 1" target="_self">Subevento 1</a></li>
									<li><a href="#" title="ir a subevento 2" target="_self">Subevento 2</a></li>
									<li><a href="#" title="ir a subevento 3" target="_self">Subevento 3</a></li>
								</ul>						
							</li>
							<li><a href="#" title="ir a evento 3" target="_self">Evento 3<span class="flecha">▼</span></a>
								<ul>
									<li><a href="#" title="ir a subevento 1" target="_self">Subevento 1</a></li>
									<li><a href="#" title="ir a subevento 2" target="_self">Subevento 2</a></li>
									<li><a href="#" title="ir a subevento 3" target="_self">Subevento 3</a></li>
								</ul>						
							</li>
						</ul>
					</li>
					<!-- Login					 -->
					<li><a href="login">LOGIN <span class="glyphicon glyphicon-user"></span> </a></li>
				</ul>
			</nav>
		</div>
	</nav>
</header>

<!---Cuerpo -->

<main class="main">
	<div class="content" style="max-width: 100%;">
	<!-- Utilizando Bootstrap -->
	<br/><br/>
	<div class="container">
		<div class="row">
		<!-- col-sm-4 crea 3 columnas del mismo tamaño -->
  			<div class="col-sm-4 nopadding">
  			<!-- bxslider es un plugin que permite crear sucesión de imagenes -->
                <ul class="bxslider">
                    <li><img class="slider img-responsive" src="images/rugby.jpg" /></li>
                    <li><img class="slider img-responsive" src="images/tennis.jpg" /></li>
                    <li><img class="slider img-responsive" src="images/remo.jpg" /></li>
                </ul>  						
  			</div>
  			<div class="col-sm-4 nopadding">
            	<ul class="bxslider">
               		<li><img class="slider" src="images/bungalows-1.jpg" /></li>
                	<li><img class="slider" src="images/bungalows-2.jpg" /></li>
                	<li><img class="slider" src="images/bungalows-3.jpg" /></li>
            	</ul>  						 			
  			</div>
  			<div class="col-sm-4 nopadding">
            	<ul class="bxslider">
                	<li><img class="slider" src="images/ajedrez.jpg" /></li>
                	<li><img class="slider" src="images/teatro.jpg" /></li>
                	<li><img class="slider" src="images/contradanza.jpg" /></li>
            	</ul>   			
  			</div>
		</div>
	</div>
		
		<div class="container">
			<div class="content">
				<div class="row">
					
							<a class="convenios col-sm-2 text-center" href="#" title="Convenios">
								<img alt="convenio" src="images/conection.png">CONVENIOS
							</a>					
				
							<a class="calendario col-sm-2 text-center" href="#" title="calendario">
								<img alt="calendario" src="images/calendar.png">CALENDARIO
							</a>
	 			
				
							<a class="concesiones col-sm-3 text-center" href="#" title="concesiones">
								<img alt="concesiones" src="images/restaurante.png">CONCESIONES
							</a>
					
							<a class="galeria col-sm-2 text-center" href="#" title="galeria">
								<img alt="galeria" src="images/image.png">GALERÍA
							</a>
				
	 		
							<a class="informes col-sm-3 text-center" href="#" title="informes">
								<img alt="informes" src="images/person.png">INFORMES ASOCIADOS
							</a>
	 					
				</div>
			</div>
				
			</div>
		</div>		
</main>

<!--Pie de págna-->

<footer class="footer">
	<div class="content clearfix">
		<div class="footer-1">
			<div class="logopie">
				<img alt="Papus Club" src="images/logo-min.png" title="Papus Club">				
			</div>
			<div class="contacto">
				<ul class="info">
					<li><a href="#" title="telefono">(51) 1 523 4567</a></li>
					<li><span><img class="manImg" src="images/punto.png" width="3px" height="3px"></img></span></li>
					<li><a href="#" title="e-mail">papus@clubpapus.org.pe</a></li>
				</ul>
				<ul class="terminos">
					<li><a href="#" title="Terminos y Condiciones">TÉRMINOS Y CONDICIONES</a></li>
					<li><span><img class="manImg" src="images/punto.png" width="3px" height="3px"></img></span></li>
					<li><a href="#" title="Privacidad">PRIVACIDAD</a></li>
					<li><span><img class="manImg" src="images/punto.png" width="3px" height="3px"></img></span></li>
					<li><a href="#" title="mapaSitio">MAPA DE SITIO</a></li>

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