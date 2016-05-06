<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR SOLICITUD DE POSTULANTE</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	
</head>

<body>
@extends('layouts.headerandfooter_after_login')
@section('content')
	<div class="content" style="max-width: 100%;">
	<div class="container" id="ruta-navegacion">
		<!-- Utilizando Bootstrap -->
		<br/><br/>
		
		<div class="row">
			<a class="btn btn-link text-left withoutpadding" href="/">INICIO <span class="glyphicon glyphicon-chevron-right"></span></a>
			<button class="btn btn-link text-left withoutpadding" href="#">MANTENIMIENTO <span class="glyphicon glyphicon-chevron-right"></span></button>
			<button class="btn btn-link text-left withoutpadding" href="#">POSTULANTE<span class="glyphicon glyphicon-chevron-right"></span></button>
			<label class="text-left withoutpadding">REGISTRO-SOLICITUD</button></label>
		</div>
		<br/>
		<div class="container">
			<div class="col-sm-12 text-left lead">
					<strong>REGISTRAR SOLICITUD DE POSTULANTE</strong>
			</div>		
		</div>
		</div>
	</div>
		<div class="table-responsive">
			<div class="container">
				<table class="table table-bordered table-hover text-center">
					<tr class="active">
						<td>APELLIDO PATERNO</td>
						<td>APELLIDO MATERNO</td>
						<td>NOMBRE</td>
						<td>FECHA</td>
						<td>OBSERVACIONES</td>
						<td>SELECCIONAR</td>
					</tr>
					<tr>
						<td>Vilcapoma</td>
						<td>Gonzales</td>
						<td>Max</td>
						<td>22/02/2016</td>
						<td> </td>
						<td><input type="checkbox" aria-label=""></td>
					</tr>
					<tr>
						<td>Beingolea</td>
						<td>More</td>
						<td>Principiante</td>
						<td>22/02/2016</td>
						<td> </td>
						<td><input type="checkbox" aria-label=""></td>
					</tr>
					<tr>
						<td>Alva</td>
						<td>Gazani</td>
						<td>Jhoseline</td>
						<td>05/01/2016</td>
						<td> </td>
						<td><input type="checkbox" aria-label=""></td>
					</tr>
					<tr>
						<td>Fuentes</td>
						<td>Ramos</td>
						<td>Victor</td>
						<td>12/12/2015</td>
						<td>MOROSO</td>
						<td><input type="checkbox" aria-label=""></td>
					</tr>
					<tr>
						<td>Milera</td>
						<td>Sánchez</td>
						<td>Marcelo</td>
						<td>19/11/2015</td>
						<td>POR APROBAR</td>
						<td><input type="checkbox" aria-label=""></td>
					</tr>
					<tr>
						<td>Dioeses</td>
						<td>Nuñez</td>
						<td>Sebastian</td>
						<td>12/03/2015</td>
						<td>REQUISITORIODO</td>
						<td><input type="checkbox" aria-label=""></td>
					</tr>
				</table>
				<br/>
				<br/>
				<br/>
				<div class="form-group">
					<div class="col-sm-6 text-center">
						<button class="btn btn-primary" onclick="confirmar_registro_solicitud_postulante()">CONFIRMAR</button>	
					</div>
					<div class="col-sm-6 text-center">
						<button class="btn btn-danger" onclick="cancelar_registro_solicitud_postulante()">CANCELAR</button>	
					</div>
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