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
@extends('layouts.headerandfooter-al-admin')
@section('content')
<!---Cuerpo -->
<main class="main">
	<div class="content" style="max-width: 100%;">
		<!-- Utilizando Bootstrap -->
		<br/><br/>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-left">
					<p class="lead"><strong>POSTULANTE</strong></p>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div role="tabpanel">
						<ul class="nav nav-pills nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Consultar</a></li>
							<li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">Registrar</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="seccion1">
							<form action="" class="form-horizontal form-border">
								<br/><br/>
								<div class="container">
									<div class="row">
										<div class="col-sm-12 text-left">
											<p ><strong>BUSQUEDA DE POSTULANTE</strong></p>
										</div>
									</div>	
								</div>
								<br/><br/>
								<div class="form-group">
									
										<div class="col-sm-2 text-center">
											<label for="" class="control-label">Tipo de Documento:</label>
										</div>
										<div class="col-sm-4 text-right">
											<select class="form-control" name="doctype" style="max-width: 250px " >
												<option value="" default>TIPO DE DOCUMENTO </option>
								                <option value="dni">LIBRETA ELECTORAL O DNI</option>
												<option value="Casado">CARNET DE EXTRANJERIA</option>
					    					</select>
										</div>	
								
									
										<div class="col-sm-1 text-left">
											<label for="" class="control-label">Nro:</label>
										</div>
										<div class="col-sm-5 text-left">
											<input type="text" class="form-control" id="nro" placeholder="#####" style="max-width: 250px">
										</div>		
							
								</div>
								<div class="form-group text-center">
									<div class="col-sm-12 text-center">
										<button class="btn btn-primary" onclick="buscar_postulante()">Buscar <span class="glyphicon glyphicon-search"></span></button>	
									</div>	
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="seccion2">
							<form action="" class="form-horizontal form-border">
								
							</form>
						</div>
					</div>
				</div>
			</div> 	
			<br/><br/>
			<div class="row">
				<div class="col-sm-12 text-center">
							<button class="btn btn-lg btn-primary" onclick="guardar_cambios_cuenta()">Guardar</button>	
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