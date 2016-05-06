<!DOCTYPE html>
<html>
<head>
	<title>Reserva Bungalow</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/MisEstilos.css"> 

	
</head>

<body>
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
					<a href="/" title="Logo oficial de Papus Club">
						<img src="images/logo.png" alt="Logo Papus Club" >
					</a>
				</div>
			</div>
			<!--Opciones de menu-->
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
					<!-- Opción Actividades -->
					<li><a href="#">ACTIVIDADES<span class="despliegue">▼</span></a>
						<ul>
							<li><a href="#" title="ir a cursos" target="_self">Talleres<span class="despliegue">▼</span></a>
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
					<li><a href="login">LOGIN <span class="glyphicon glyphicon-user"></span> </a></li>
				</ul>
			</nav>
		</div>
	</nav>
</header>

<!---Cuerpo -->

<main class="main">
	<div class="content" style="max-width: 100%;">
	<div class="container" id="ruta-navegacion">
		<br/>
		<div class="row">
			<a class="btn btn-link text-left withoutpadding" href="/">INICIO <span class="glyphicon glyphicon-chevron-right"></span></a>
			<button class="btn btn-link text-left withoutpadding" href="#">SEDES <span class="glyphicon glyphicon-chevron-right"></span></button>
			<button class="btn btn-link text-left withoutpadding" href="historia-sede-callao">CALLAO <span class="glyphicon glyphicon-chevron-right"></span></button>
			<label class="text-left withoutpadding">BUNGALOW</label>
		</div>
		<br/>
	</div>
	
	<div class="container">
		<div class="row">
  			<div class="col-sm-12 withoutpadding">
  			<!-- bxslider es un plugin que permite crear sucesión de imagenes -->
                <ul class="bxslider">
                	<li><img class="slider img-responsive" src="images/bungalow4.jpg" /></li>
                    <li><img class="slider img-responsive" src="images/bungalow3.jpg" /></li> 
                    <li><img class="slider img-responsive" src="images/bungalow2.jpg" /></li> 
                    <li><img class="slider img-responsive" src="images/bungalow1.jpg" /></li>    
                </ul>  						
  			</div>
  			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p><strong>RESERVA DE BUNGALOW EN CALLAO</strong></p>
			</div>
		</div>
		<div class="container rango-fechas">
			<div class ="content">
					<div class="row">
						<div class="col-sm-4 text-center">
							<label>Fecha Ingreso:</label>
							<input class="datepicker" type="text" id="dpd1" readonly="true">
						</div>
						<div class="col-sm-4 col-sm-offset-4 text-center">
							<label>Fecha Salida:</label>
							<input class="datepicker" type="text" id="dpd2" readonly="true">
						</div>								
					</div>
			</div>
			<div class ="content">
					<div class="row">
		  				<div class="col-sm-4 text-center"></div>
		  				<div class="col-sm-4 text-center"style="padding-top: 36px">
		  					<button type="button" class="btn btn-lg btn-primary">
		    					<span class="glyphicon glyphicon-search"></span> Buscar Reserva
		  					</button>		  					
		  				</div>
		  				<div class="col-sm-4 text-center"></div>				
					</div>
			</div>	
		</div>
		</div>	
		<br/>
		<br/>
		<div id="marca"class="table-responsive">
			<div class="container">
				<table class="table table-bordered table-hover text-center">
					<tr class="active">
						<td>TIPO</td>
						<td>CANTIDAD DISPONIBLE</td>
						<td>CANTIDAD ELEGIDA</td>
						<td>SELECCIONAR</td>
					</tr>
					<tr>
						<td>Pequeño</td>
						<td>5</td>
						<td>
							<div class="col-sm-2 col-sm-offset-5 text-center selectContainer">
								<select class="form-control" name="size" style="width: 60px ">
							                <option value="1" default>1</option>
							                <option value="2">2</option>
							                <option value="3">3</option>
							                <option value="4">4</option>
							                <option value="5">5</option>
							    </select>
							</div>
						</td>
						<td><input type="radio" aria-label=""></td>
					</tr>
					<tr>
						<td>Mediano</td>
						<td>3</td>
						<td>
							<div class="col-sm-2 col-sm-offset-5 text-center selectContainer">
								<select class="form-control" name="size" style="width: 60px ">
							                <option value="1" default>1</option>
							                <option value="2">2</option>
							                <option value="3">3</option>
							    </select>
							</div>
						</td>
						<td><input type="radio" aria-label=""></td>
					</tr>
					<tr>
						<td>Grande</td>
						<td>2</td>
						<td>
							<div class="col-sm-2 col-sm-offset-5 text-center selectContainer">
								<select class="form-control" name="size" style="width: 60px ">
							                <option value="1" default>1</option>
							                <option value="2">2</option>						                
							    </select>
							</div>
						</td>
						<td><input type="radio" aria-label=""></td>
					</tr>
				</table>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-right">
					<button class="btn btn-primary">RESERVAR</button>
				</div>
				<div class="col-sm-4 text-center">
					<button class="btn btn-primary">ATRAS</button>
				</div>
				<div class="col-sm-4 text-left">
					<button class="btn btn-primary">LIMPIAR</button>
				</div>
			</div>
		</div>
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

	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

	<script>
		var nowTemp = new Date();
		var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
 
		var checkin = $('#dpd1').datepicker({
  			onRender: function(date) {
    			return date.valueOf() < now.valueOf() ? 'disabled' : '';
  			}
		}).on('changeDate', function(ev) {
  			if (ev.date.valueOf() > checkout.date.valueOf()) {
    			var newDate = new Date(ev.date)
    			newDate.setDate(newDate.getDate() + 1);
    			checkout.setValue(newDate);
  			}
 			checkin.hide();
  			$('#dpd2')[0].focus();
		}).data('datepicker');

		var checkout = $('#dpd2').datepicker({
  			onRender: function(date) {
    			return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
  			}
		}).on('changeDate', function(ev) {
  			checkout.hide();
		}).data('datepicker');		
	</script>
	<script>
		$(function(){
			$('.datepicker').datepicker();
		});
	</script>

</body>

</html>