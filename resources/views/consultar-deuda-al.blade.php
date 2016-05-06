<!DOCTYPE html>
<html>
<head>
	<title>CONSULTAR DEUDA</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
	
</head>
<body>
@extends('layouts.headerandfooter_after_login')
@section('content')
<!---Cuerpo -->
<main class="main">
	<div class="content" style="max-width: 100%;">
		<!-- Utilizando Bootstrap -->
		<br/><br/>
		<div class="container">
			<div class="col-sm-12 text-left lead">
					<strong>CONSULTAR DEUDA</strong>
			</div>		
		</div>
		<div class="container">
			<form action="" class="form-horizontal form-border">
				<br/><br/>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">CÓDIGO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre" placeholder="12315452" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">FECHA EMISIÓN:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre" placeholder="30/03/2016" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">FECHA DE VENCIMIENTO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre" placeholder="10/04/2016" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">IMPORTE:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="importe" placeholder="250 Nuevos Soles" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">ESTADO DE DEUDA:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre" placeholder="Cancelada" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">FECHA DE PAGO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre" placeholder="02/04/2016" style="max-width: 250px" disabled>
					</div>
				</div>
				<br/>
				<br/>
				<br/>
				<div class="form-group">
					<div class="col-sm-6 text-center">
						<button class="btn btn-primary" onclick="imprimir_deuda()">IMPRIMIR</button>	
					</div>
					<div class="col-sm-6 text-center">
						<button class="btn btn-danger" onclick="cancelar_registro_ambiente()">CANCELAR</button>	
					</div>
				</div>
			</form>
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