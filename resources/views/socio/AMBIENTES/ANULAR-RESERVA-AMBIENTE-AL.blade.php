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
@extends('layouts.headerandfooter-al-socio')
@section('content')
<!---Cuerpo -->
<main class="main">
	<div class="content" style="max-width: 100%;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<ol class="breadcrumb">
						<li><a href="socio"><span class="glyphicon glyphicon-home"></span></a></li>
						<li><a href="ambientes-s">Ambientes</a></li>
						<li class="active">Anular Reserva de Ambientes</li>
					</ol>
				</div>				
			</div>
		</div>
		<!-- Utilizando Bootstrap -->
		<br/><br/>
		<div class="container">
			<div class="col-sm-12 text-left lead">
					<strong>ANULAR RESERVA DE AMBIENTE</strong>
			</div>		
		</div>
		<div class="container form-border">
			
				<br/><br/>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-3">
						<input type="text" class="form-control" id="nombre" placeholder="Nombre" style="max-width: 300px">
					</div>
					<div class="col-sm-5 text-left">
						<button class="btn btn-info" onclick="buscarAmbientes()">Buscar <span class="glyphicon glyphicon-search"></span></button>
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
							<td></td>
							<td></td>
							<td></td>
							<td><!-- <input type="checkbox" aria-label=""> --></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><!-- <input type="checkbox" aria-label=""> --></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><!-- <input type="checkbox" aria-label=""> --></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><!-- <input type="checkbox" aria-label=""> --></td>

						</tr>
					</table>
					<br/>
					<br/>
					<br/>
					<div class="container">
						<div class="form-group">
							<div class="col-sm-6 text-center">
								<button class="btn btn-primary" onclick="confirmar_anulacion_ambiente()">CONFIRMAR</button>	
							</div>
							<div class="col-sm-6 text-center">
								<button class="btn btn-danger" onclick="cancelar_anulacion_ambiente()">CANCELAR</button>	
							</div>
						</div>
					</div>
					<br/><br/>
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