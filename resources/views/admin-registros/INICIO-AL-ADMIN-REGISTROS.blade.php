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
	
</head>
<body>
@extends('layouts.headerandfooter-al-admin-registros')
@section('content')
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
@stop
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