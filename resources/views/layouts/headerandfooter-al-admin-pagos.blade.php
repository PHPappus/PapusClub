<!--Cabecera- Se separará espacio para el input de busqueda antes de la cabecera de menu-->
<header class="header">
		<div class="content clearfix">
			<!--Input de buscador de la parte superior derecha-->
			<nav class="search">
				<div class="search_box">
					<form action="#" id="search-box" method="get">
						<label class="hidden" for="inputbusqueda">Buscar</label>
	                    <input type="text" placeholder="Ingresa tu búsqueda" id="inputbusqueda" name="conte">
	                    <span class="glyphicon glyphicon-search" href="#"></span>
					</form>
				</div>
			</nav>
		</div>
		<!--menu de opciones superior-->
<<<<<<< HEAD
		<nav class="main-menu">
			<div class="content-fluid" style="margin-left: 10%">
				<div class="logo">
					<div class="edit-logo">
						<a href="/" title="Logo oficial de Papus Club">
=======
		<nav class="main-menu-alog">
			<div class="content-fluid" style="margin-left: 10%">
				<div class="logo">
					<div class="edit-logo">
						<a href="inicio-after-login" title="Logo oficial de Papus Club">
>>>>>>> 22d1da32d2c1433e0fdc29c0422699297048180b
							<img src="images/logo.png" alt="Logo Papus Club" href="/">
						</a>
					</div>
				</div>
				<!--Opciones de menu-->
<<<<<<< HEAD
				
				<nav class="menu" id="menu">
					<ul>
						<li><a href="#">{!!Auth::user()->name!!}  <span class="glyphicon glyphicon-user"></span></a>
								<ul>
									<li><a href="{!!URL::to('/cuenta-ap')!!}" title="ir a ver curso 1" target="_self">CUENTA</a></li>
									<li><a href="{!!URL::to('/logout')!!}" title="LOGOUT" target="_self">LOGOUT</a></li>
								</ul>
						</li>
=======
				<nav class="menu" id="menu">
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
								<li><a href="historia-sede-callao" title="Callao" target="_self">Callao<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="Concesiones" target="_self">Concesiones</a></li>
										<li><a href="#" title="Servicios" target="_self">Servicios</a></li>
										<li><a href="reserva-bungalow" title="Bungalows" target="_self">Bungalows</a></li>
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
						<!-- Opción Agenda Cultural -->
						<li><a href="#">AGENDA CULTURAL<span class="despliegue">▼</span></a>
							<ul>
								<li><a href="#" title="Agenda 1" target="_self">Evento 1<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="Agenda 1-1" target="_self">Evento 1.1</a></li>
										<li><a href="#" title="Agenda 1-2" target="_self">Evento 1.2</a></li>
										<li><a href="#" title="Agenda 1-3" target="_self">Evento 1.3</a></li>
									</ul>
								</li>
								<li><a href="#" title="Agenda 2" target="_self">Evento 2<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="Agenda 2-1" target="_self">Evento 2.1</a></li>
										<li><a href="#" title="Agenda 2-2" target="_self">Evento 2.2</a></li>
										<li><a href="#" title="Agenda 2-3" target="_self">Evento 2.3</a></li>
									</ul>						
								</li>
								<li><a href="#" title="Agenda 3" target="_self">Evento 3<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="Agenda 3-1" target="_self">Evento 3.1</a></li>
										<li><a href="#" title="Agenda 3-2" target="_self">Evento 3.1</a></li>
										<li><a href="#" title="Agenda 3-3" target="_self">Evento 3.1</a></li>
									</ul>						
								</li>
							</ul>
						</li>
						<!-- Opción Talleres -->
						<li><a href="#">TALLERES<span class="despliegue">▼</span></a>
							<ul>
								<li><a href="#" title="ir a cursos" target="_self">TALLERES<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="futbol" title="ir a futbol" target="_self">Futbol</a></li>
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
						<!-- Opción Trámites -->
						<li><a href="#">TRÁMITES<span class="despliegue">▼</span></a>
							<ul>
								<li><a href="#" title="Tramite 1" target="_self">Evento 1<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="Tramite 1-1" target="_self">Evento 1.1</a></li>
										<li><a href="#" title="Tramite 1-2" target="_self">Evento 1.2</a></li>
										<li><a href="#" title="Tramite 1-3" target="_self">Evento 1.3</a></li>
									</ul>
								</li>
								<li><a href="#" title="Tramite 2" target="_self">Evento 2<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="Tramite 2-1" target="_self">Evento 2.1</a></li>
										<li><a href="#" title="Tramite 2-2" target="_self">Evento 2.2</a></li>
										<li><a href="#" title="Tramite 2-3" target="_self">Evento 2.3</a></li>
									</ul>						
								</li>
								<li><a href="#" title="Tramite 3" target="_self">Evento 3<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="Tramite 3-1" target="_self">Evento 3.1</a></li>
										<li><a href="#" title="Tramite 3-2" target="_self">Evento 3.1</a></li>
										<li><a href="#" title="Tramite 3-3" target="_self">Evento 3.1</a></li>
									</ul>						
								</li>
							</ul>
						</li>
						<!-- Opción Login -->
						<li><a href="login">LOGIN/LOG-OUT <span class="glyphicon glyphicon-user"></span> </a></li>
					</ul>
				</nav>
		    	<!--menu de opciones debajo de la superior-->
				<nav class="menu" id="menu-2">
					<ul>
						<li><a href="#">CUENTA</a></li>
>>>>>>> 22d1da32d2c1433e0fdc29c0422699297048180b
						<!-- Opción Actividades -->
						<li><a href="#">SOCIO</a></li>
						<!-- Opción TRABAJADOR -->
						<li><a href="#">TRABAJADOR</a></li>
<<<<<<< HEAD
						<!-- Opción TRÄMITES -->
						<li><a href="#">TRÁMITES</a></li>
=======
>>>>>>> 22d1da32d2c1433e0fdc29c0422699297048180b
						<!-- Opción SEDE -->
						<li><a href="#">VENTA</a></li>
					</ul>
				</nav>
			</div>
    	</nav>
</header>
<!---Cuerpo -->

<main class="main">
@yield('content')
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
