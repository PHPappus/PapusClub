<!DOCTYPE html>
<html>
<head>
	<title>AMBIENTES PAPUS CLUB</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
	
</head>
<body>
@extends('layouts.headerandfooter-al-socio')
@section('content')
	<div class="content" style="max-width: 100%;">
		<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<ol class="breadcrumb">
							<li><a href="inicio-al-socio"><span class="glyphicon glyphicon-home"></span></a></li>
							<li class="active">Ambientes</li>
						</ol>
					</div>				
				</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<p class="lead"><strong>AMBIENTES PAPUS CLUB</strong></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
	  			<div class="col-sm-12 withoutpadding">
	  			<!-- bxslider es un plugin que permite crear sucesión de imagenes -->
	                <ul class="bxslider">
	                    <li><img class="slider img-responsive" src="images/canchafutbol1.jpg" /></li>  
	                </ul>  						
	  			</div>
	  			
			</div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-sm-6 text-center">
				<!--aqui debe haber una validacion si está logueado o no-->
					<button class="btn btn-primary" onclick="reservarAmbiente()">RESERVAR AMBIENTE</button>		
				</div>
				<div class="col-sm-6 text-center">
					<button class="btn btn-primary" onclick="anularReservaAmbiente()">ANULAR RESERVA DE AMBIENTE</button>		
				</div>
			</div>
		</div>	
	</div>
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