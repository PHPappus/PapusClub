<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR PROVEEDOR</title>
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
					<strong>REGISTRAR PROVEEDOR</strong>
			</div>		
		</div>
		<div class="container">
			<form method="POST" action="registrar-proveedor-al/nuevo" class="form-horizontal form-border">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<br/><br/>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">NOMBRE DEL PROVEEDOR:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="nombreproveedor" id="nombre-proveedor" placeholder="Nombre del Proveedor" required style="max-width: 250px">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-sm-5">RUC:</label>
					<div class="col-sm-7">
						<input type="text" pattern="[0-9]{11}" title="Número de 11 dígitos" class="form-control" name="ruc" id="ruc" placeholder="RUC" required style="max-width: 250px">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-sm-5">DIRECCIÓN:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" required style="max-width: 250px">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-5">TELÉFONO:</label>
					<div class="col-sm-7">
						<input type="text" pattern="[0-9]{7,13}" title="Número" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required style="max-width: 250px">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-5">CORREO:</label>
					<div class="col-sm-7">
						<input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" name="correo" id="correo" placeholder="Correo" required style="max-width: 250px">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-5">NOMBRE DEL RESPONSABLE:</label>
					<div class="col-sm-7">
						<input type="text"  class="form-control" name="nombreresponsable" id="nombre-responsable" placeholder="Nombre del Responsable" required style="max-width: 250px">				
					</div>
				</div>

				
				<div class="form-group">
					<label for="" class="control-label col-sm-5">ESTADO:</label>
					<div class="col-sm-7">
								
						<select name="estado" class="form-control" id="estado" required style="max-width: 250px">
						<!-- Las opciones se deberían extraer de la tabla configuracion?-->
						<option value="1" >Activo</option>
						<option value="0" selected="selected">Inactivo</option>				
						
						</select>						

					</div>
				</div>

				<br/>
				<br/>
				<br/>
				<div class="form-group">
					<div class="col-sm-6 text-center">
						<input type="submit" value="Confirmar">	
					</div>
					<div class="col-sm-6 text-center">
						<button class="btn btn-danger" onclick="cancelar_registro_proveedor()">CANCELAR</button>	
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