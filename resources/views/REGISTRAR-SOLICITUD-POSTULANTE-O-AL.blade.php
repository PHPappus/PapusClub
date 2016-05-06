<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR INVITADO</title>
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
					<strong>REGISTRAR SOLICITUD DE POSTULANTE</strong>
			</div>		
		</div>
		<div class="container">
			<form action="" class="form-horizontal form-border">
				<br/><br/>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">NOMBRES:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre" placeholder="Nombre" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">APELLIDO PATERNO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="ap-paterno" placeholder="Apellido Paterno" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">APELLIDO MATERNO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="ap-materno" placeholder="Apellido Materno" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">DNI:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="dni" placeholder="Dni" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">TELEFONO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="telefono" placeholder="Teléfono" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">CORREO ELECTRÓNICO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="correo-electronico" placeholder="Correo electrónico" style="max-width: 250px" disabled>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">OBSERVACIONES:</label>
					<div class="col-sm-7">
						<input type="text-area" class="form-control" id="observaciones"  style="height: 300px; width: 300px;">
					</div>
					<!-- <div class="row">
						<div class="col-sm-4 col-sm-offset-4 text-center">
							<input type="text" class="form-control" style="height: 300px; width: 300px;">
						</div>
					</div> -->
				</div>
				<br/>
				<br/>
				<br/>
				<div class="form-group">
					<div class="col-sm-6 text-center">
						<button class="btn btn-primary" onclick="confirmar_registro_nuevo_producto()">CONFIRMAR</button>	
					</div>
					<div class="col-sm-6 text-center">
						<button class="btn btn-danger" onclick="regresar_registro_nuevo_producto()">REGRESAR</button>	
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