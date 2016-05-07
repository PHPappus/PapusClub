<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR PROVEEDOR</title>
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
			<form action="" class="form-horizontal form-border">
				<br/><br/>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-5">NOMBRE DEL PROVEEDOR:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre-proveedor" required style="max-width: 250px" disabled value="{{ $nombre_proveedor }}">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-sm-5">RUC:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="ruc" required style="max-width: 250px" disabled value="{{ $ruc }}">
					</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-sm-5">DIRECCIÓN:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="direccion" required style="max-width: 250px" value="{{ $direccion }}">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-5">TELÉFONO:</label>
					<div class="col-sm-7">
						<input type="text" title="Número" class="form-control" id="telefono" required style="max-width: 250px" value="{{ $telefono }}">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-5">CORREO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="correo" style="max-width: 250px" value="{{ $correo }}">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-5">NOMBRE DEL RESPONSABLE:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nombre-responsable" required style="max-width: 250px" value="{{ $nombre_responsable }}">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label col-sm-5">ESTADO:</label>
					<div class="col-sm-7">
									
						<select name="mi_combobox" class="form-control" id="estado" required style="max-width: 250px">
						 <!--Las opciones se deberían extraer de la tabla configuracion?-->
						<option value="1"
							<?php if($estado == '1'){echo("selected");}?>
						>Activo</option>
						<option value="0" 
							<?php if($estado == '0'){echo("selected");}?>
						>Inactivo</option>				
						
						</select>						

					</div>
				</div>
				
				<br/>
				<br/>
				<br/>
				<div class="form-group">
					<div class="col-sm-6 text-center">
						<button class="btn btn-primary" onclick="confirmar_modificacion_proveedor()">CONFIRMAR</button>	
					</div>
					<div class="col-sm-6 text-center">
						<button class="btn btn-danger" onclick="cancelar_modificacion_proveedor()">CANCELAR</button>	
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