<!DOCTYPE html>
<html>
<head>
	<title>ANULAR RESERVA DE AMBIENTE</title>
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
					<strong>ANULAR RESERVA DE AMBIENTE</strong>
			</div>		
		</div>
		<div class="container">
			<form action="" class="form-horizontal form-border">
				<br/><br/>
				<div class="form-group">
					<label for="" class="control-label col-sm-4">NOMBRE:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="nombre" placeholder="Nombre" style="max-width: 300px">
					</div>
					<div class="col-sm-5 text-left">
						<button class="btn btn-info" onclick="buscar_ambientes_x_user()">Buscar <span class="glyphicon glyphicon-search" href="#"></span></button>
					</div>
				</div>
				<br/><br/>
				<table class="table table-bordered table-hover text-center">
						<tr class="active">
							<td>SEDE</td>
							<td>AMBIENTE</td>
							<td>DESCRIPCIÓN</td>
							<td>FECHA</td>
						</tr>
						<tr>
							<td>Barranco</td>
							<td>Cancha de Futsal</td>
							<td>Cancha Número 4</td>
							<td>19/04/2016</td>
						</tr>
						<tr>
							<td>Barranco</td>
							<td>Cancha de tenis</td>
							<td>Cancha Número 1</td>
							<td>07/02/2016</td>
						</tr>
						<tr>
							<td>Surquillo</td>
							<td>Box Karaoke</td>
							<td>Box Karaoke 1</td>
							<td>29/01/2016</td>
						</tr>
						<tr>
							<td>Callao</td>
							<td>Sala de conferencias</td>
							<td>Sala de conferencias número 3</td>
							<td>09/01/2016</td>

						</tr>
					</table>
					<br/>
					<br/>
					<br/>
					<div class="form-group">
						<div class="col-sm-6 text-center">
							<button class="btn btn-primary" onclick="confirmar_anulacion_ambiente()">CONFIRMAR</button>	
						</div>
						<div class="col-sm-6 text-center">
							<button class="btn btn-danger" onclick="cancelar_anulacion_ambiente()">CANCELAR</button>	
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