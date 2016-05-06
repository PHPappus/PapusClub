<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR PRECIO ESPECIAL DE MEMBRESÍA</title>
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
					<strong>REGISTRAR PRECIO ESPECIAL DE MEMBRESÍA</strong>
			</div>		
		</div>
		<div class="container">
			<form action="" class="form-horizontal form-border">
				<br/><br/>
				<table class="table table-bordered table-hover text-center">
						<tr class="active">
							<td>TIPO DE MEMBRESÍA</td>
							<td>PRECIO REGULAR</td>
							<td>SELECCIONAR</td>
						</tr>
						<tr>
							<td>Normal</td>
							<td>100</td>
							<td><input type="checkbox" aria-label=""></td>
						</tr>
						<tr>
							<td>Familiar</td>
							<td>150</td>
							<td><input type="checkbox" aria-label=""></td>
						</tr>
						<tr>
							<td>Vitalicio</td>
							<td>0</td>
							<td><input type="checkbox" aria-label=""></td>
						</tr>
					</table>
					<br/>
					<br/>
					<br/>
					<div class="form-group">
						<div class="col-sm-6 text-center">
							<button class="btn btn-primary" onclick="confirmar_registro_precio_especial_membresia_1()">CONFIRMAR</button>	
						</div>
						<div class="col-sm-6 text-center">
							<button class="btn btn-danger" onclick="cancelar_registro_precio_especial_membresia()">CANCELAR</button>	
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