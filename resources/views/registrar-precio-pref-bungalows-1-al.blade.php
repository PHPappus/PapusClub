<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR PRECIO PREFERENCIAL DE BUNGALOWS</title>
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
					<strong>REGISTRAR PRECIO PREFERENCIAL DE BUNGALOWS</strong>
			</div>		
		</div>
		<div class="container">
			<form action="" class="form-horizontal form-border">
				<br/><br/>
				<div class="table-responsive">
				
					<table class="table table-bordered table-hover text-center">
						<tr class="active">
							<td>SEDE</td>
							<td>TIPO DE BUNGALOW</td>
							<td>PRECIO REGULAR</td>
						</tr>
						<tr>
							<td>Callao</td>
							<td>Normal</td>
							<td>100</td>
						</tr>
						<tr>
							<td>Callao</td>
							<td>Matrimonial</td>
							<td>150</td>
						</tr>
						<tr>
							<td>Callao</td>
							<td>Familiar</td>
							<td>250</td>
						</tr>
						<tr>
							<td>Barranco</td>
							<td>Normal</td>
							<td>140</td>
						</tr>
						<tr>
							<td>Barranco</td>
							<td>Matrimonial</td>
							<td>200</td>
						</tr>
						<tr>
							<td>Surquillo</td>
							<td>Matrimonial</td>
							<td>250</td>
						</tr>
						<tr>
							<td>Surquillo</td>
							<td>Familiar</td>
							<td>300</td>
						</tr>
					</table>
				
		</div>
				<br/>
				<br/>
				<br/>
				<div class="form-group">
					<div class="col-sm-6 text-center">
						<button class="btn btn-primary" onclick="registrar_nuevo_precio_1()">REGISTRAR NUEVO PRECIO</button>	
					</div>
					<div class="col-sm-6 text-center">
						<button class="btn btn-danger" onclick="cancelar_registro_precio_pref_bungalows()">CANCELAR</button>	
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