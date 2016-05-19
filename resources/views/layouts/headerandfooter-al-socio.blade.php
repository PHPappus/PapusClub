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
		<nav class="main-menu">
			<div class="content">
				<div class="logo">
					<div class="edit-logo">
						<a href="{!!URL::to('/socio')!!}" title="Logo oficial de Papus Club">
							<img src="images/logo.png" alt="Logo Papus Club" href="/">
						</a>
					</div>
				</div>
				<!--Opciones de menu-->
		    	<!--menu de opciones debajo de la superior-->
				<nav class="menu" id="menu">
					<ul>
						<li><a href="#">{!!Auth::user()->name!!}  <span class="glyphicon glyphicon-user"></span></a>
									<ul>
										<li><a href="{!!URL::to('/cuenta-s')!!}" title="ir a ver curso 1" target="_self">CUENTA</a></li>
										<li><a href="{!!URL::to('/logout')!!}" title="LOGOUT" target="_self">LOGOUT</a></li>
									</ul>
						</li>
						<!-- Sedes -->
						<li><a href="{!!URL::to('/pagos-s')!!}">PAGOS</a></li>
						<!-- Opción Actividades -->
						<li><a href="#">TALLERES<span class="despliegue">▼</span></a>
							<ul>
								<li><a href="{!!URL::to('/talleres-s')!!}" title="consultar talleres" target="_self">CONSULTAR</a></li>
								<li><a href="{!!URL::to('/futbol-s')!!}" title="inscripciones de talleres" target="_self">INCRIPCIONES</a></li>
							</ul>					
						</li>
						<li><a href="#">TRÁMITES</a>
						</li>
						<!-- Opción Eventos -->
						<li><a href="#">ACTIVIDADES<span class="despliegue">▼</span></a>
							<ul>
								<li><a href="#" title="consultar actividades" target="_self">CONSULTAR</a></li>
								<li><a href="#" title="inscripciones de actividades" target="_self">INCRIPCIONES</a></li>
							</ul>
						</li>
						<!-- Opción TRAMITES -->
						<li><a href="#">AMBIENTES<span class="despliegue">▼</span></a>
							<ul>
								<li><a href="{!!URL::to('/ambientes-s')!!}" title="consultar ambientes" target="_self">CONSULTAR</a></li>
								<li><a href="#" title="reserva de ambientes" target="_self">RESERVAR</a></li>
								<li><a href="{!!URL::to('/anular-reserva-ambiente-s')!!}" title="anular ambientes" target="_self">ANULAR</a></li>
							</ul>
						</li>
						<!-- Opción MANTENIMIENTO -->
						<li><a href="#">BUNGALOWS<span class="despliegue">▼</span></a>
							<ul>
								<li><a href="{!!URL::to('/bungalows-s')!!}" title="consultar Bungalows" target="_self">CONSULTAR</a></li>
								<li><a href="{!!URL::to('/reserva-bungalows-s')!!}" title="reserva de bungalows" target="_self">RESERVAR</a></li>
							</ul>
						</li>
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
				</ul>
					
			</div>
		</div>
	</div>
</footer>
