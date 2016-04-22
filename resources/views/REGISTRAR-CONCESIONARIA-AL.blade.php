<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR CONCESIONARIA</title>
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
					<strong>REGISTRAR AMBIENTE</strong>
			</div>		
		</div>
		<div class="container">
			<form action="" class="form-horizontal form-border">
				<br/><br/>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">RUC:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="ruc" placeholder="RUC" style="max-width: 250px">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-sm-5">DIRECCIÓN:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="direccion" placeholder="Dirección" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">TELÉFONO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="telefono" placeholder="Teléfono" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">CORREO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="correo" placeholder="Correo" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">NOMBRE DEL RESPONSABLE:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre-responsable" placeholder="Nombre del responsable" style="max-width: 250px">
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