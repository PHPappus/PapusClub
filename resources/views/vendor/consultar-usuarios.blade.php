<!DOCTYPE html>
<html>
<head>
	<title>CUENTA-AL-SOCIO</title>
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
		<!-- Utilizando Bootstrap -->
		<br/><br/>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-left">
					<p class="lead"><strong>TIPO DE LOGUEO</strong></p>
				</div>
			</div>	
		</div>
		<div class="container">
			<br/><br/>
			<div class="row">
				<div class="col-sm-4 text-center">
							<button class="btn btn-primary" onclick="ir_inicio_como_socio()">INGRESAR COMO SOCIO</button>	
				</div>
				<div class="col-sm-4 text-center">
							<button class="btn btn-primary" onclick="ir_inicio_como_admin()">INGRESAR COMO ADMINISTRADOR</button>	
				</div>
				<div class="col-sm-4 text-center">
							<button class="btn btn-primary" onclick="ir_inicio_como_gerente()">INGRESAR COMO GERENTE</button>	
				</div>
			</div>
			<br/><br/>
			<div class="row">
				<div class="col-sm-6 text-center">
							<button class="btn btn-primary" onclick="ir_inicio_como_admin_pagos()">INGRESAR COMO ADMIN. DE PAGOS</button>	
				</div>
				<div class="col-sm-6 text-center">
							<button class="btn btn-primary" onclick="ir_inicio_como_admin_registros()">INGRESAR COMO ADMIN. DE REGISTROS</button>	
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