<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR AMBIENTE</title>
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
					<strong>MODIFICAR AMBIENTE</strong>
			</div>		
		</div>
		<div class="container">
			<form action="" class="form-horizontal form-border">
				<br/><br/>
				<div class="form-group">
					<label for="SEDE" class="control-label col-sm-5">SEDE:</label>
					<div class="col-sm-7">
						<select class="form-control" name="sede" style="max-width: 150px " >
					                <option value="1" default>CALLAO</option>
					                <option value="2">SURQUILLO</option>
					                <option value="3">BARRANCO</option>
					    </select>	
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">NOMBRE:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre" placeholder="Nombre" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">UBICACIÓN:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="ubicacion" placeholder="UBICACIÓN" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">CAPACIDAD:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="capacidad" placeholder="CAPACIDAD" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">ESTADO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="estado" placeholder="ESTADO" style="max-width: 250px">
					</div>
				</div>
				<br/>
				<br/>
				<br/>
				<div class="form-group">
					<div class="col-sm-6 text-center">
						<button class="btn btn-primary" onclick="confirmar_registro_ambiente()">CONFIRMAR</button>	
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