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
		<nav class="main-menu" style="height: 122px;">
			<div class="content">
				<div class="logo">
					<div class="edit-logo">
						<a href="inicio-al-admin-registros" title="Logo oficial de Papus Club">
							<img src="images/logo.png" alt="Logo Papus Club" href="/">
						</a>
					</div>
				</div>
				<!--Opciones de menu-->
				<nav class="menu" id="menu">
					<ul>
						<li><a href="#">{!!Auth::user()->name!!}  <span class="glyphicon glyphicon-user"></span></a>
									<ul>
										<li><a href="{!!URL::to('/cuenta-ar')!!}" title="ir a ver curso 1" target="_self">CUENTA</a></li>
										<li><a href="{!!URL::to('/logout')!!}" title="LOGOUT" target="_self">LOGOUT</a></li>
									</ul>
						</li>
						<!-- Opción SOCIO -->
						<li><a href="#">SOCIO</a></li>
						<!-- Sedes -->
						<li><a href="#">PAGO<!-- <span class="despliegue">▼</span> --></a>
							<!-- <ul>
								<li><a href="#" title="ir a curso 1" target="_self">CURSO 2<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="ir a ver curso 1" target="_self">VER CURSO</a></li>
										<li><a href="#" title="ir a inscribirse 1" target="_self">INSCRIBIRSE</a></li>
									</ul>
								</li>
								<li><a href="#" title="ir a curso 2" target="_self">CURSO 1<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="ir a ver curso 2" target="_self">VER CURSO</a></li>
										<li><a href="#" title="ir a inscribirse 2" target="_self">INSCRIBIRSE</a></li>
									</ul>						
								</li>
							</ul> -->
						</li>
						<!-- Opción Actividades -->
						<li><a href="#">TALLER<span class="despliegue">▼</span></a>
							<ul>
								<li><a href="#" title="ir a ambientes" target="_self">AMBIENTES<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="ir a ver curso" target="_self">VER</a></li>
										<li><a href="#" title="ir a reservar ambiente" target="_self">RESERVAR</a></li>
										<li><a href="anular-reserva-ambiente-al" title="ir a anular ambiente" target="_self">ANULAR</a></li>
									</ul>						
								</li>
								<li><a href="#" title="ir a cursos" target="_self">CURSOS<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="ir a ver curso" target="_self">VER</a></li>
										<li><a href="#" title="ir a inscribirse en curso" target="_self">INSCRIBIRSE</a></li>
									</ul>						
								</li>
								<li><a href="#" title="ir a talleres" target="_self">TALLERES<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="ir a ver taller" target="_self">VER</a></li>
										<li><a href="#" title="ir a inscribirse en taller" target="_self">INSCRIBIRSE</a></li>
									</ul>
								</li>
								<li><a href="#" title="ir a eventos" target="_self">EVENTOS<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="ir a ver evento" target="_self">VER</a></li>
										<li><a href="#" title="ir a inscribirse en evento" target="_self">INSCRIBIRSE</a></li>
									</ul>						
								</li>
								<li><a href="#" title="ir a actividades" target="_self">ACTIVIDADES<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="ir a ver actividad" target="_self">VER</a></li>
										<li><a href="#" title="ir a inscribirse en actividad" target="_self">INSCRIBIRSE</a></li>
									</ul>						
								</li>
							</ul>					
						</li>
						<!-- Opción TRAMITES -->
						<li><a href="#">AMBIENTE<span class="despliegue">▼</span></a>
							<ul>
								<li><a href="#" title="ir_tramites" target="_self">VER TRÁMITES<span class="despliegue">▼</span></a>
									<ul>
										<!-- <li><a href="#" title="Evento 1-1" target="_self">Evento 1.1</a></li> -->
										<!-- <li><a href="#" title="Evento 1-2" target="_self">Evento 1.2</a></li> -->
										<!-- <li><a href="#" title="Evento 1-3" target="_self">Evento 1.3</a></li> -->
									</ul>
								</li>
							</ul>
						</li>
						<!-- Opción MANTENIMIENTO -->
						<li><a href="#">BUNGALOW<!-- <span class="despliegue">▼</span> --></a>
							<ul>
								
								
							</ul>
						</li>
												<!-- Opción Eventos -->
						<li><a href="#">ACTIVIDAD<!-- <span class="despliegue">▼</span> --></a>
							<!-- <ul>
								<li><a href="#" title="Evento 1" target="_self">VER DETALLES<span class="despliegue">▼</span></a>
									<ul>
										<li><a href="#" title="Evento 1-1" target="_self">Evento 1.1</a></li>
										<li><a href="#" title="Evento 1-2" target="_self">Evento 1.2</a></li>
									</ul>
								</li>
							</ul> -->
						</li>	
					</ul>
				</nav>
				<nav class="menu" id="menu2">
					<ul>
						<li><a href="#">TRAMITES</a></li>
						<li><a href="{!!URL::to('/usuario')!!}">CUENTAS</a></li>
						<li><a href="#">PRODUCTO</a></li>
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
				<img alt="Papus Club" src="images/logo-min.png" title="Papus Club" style="z-index: -1;">				
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
				</ul>
					
			</div>
		</div>
	</div>
</footer>
