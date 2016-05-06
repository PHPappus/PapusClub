<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR SEDE</title>
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
<!---Cuerpo -->
<main class="main">
	<div class="content" style="max-width: 100%;">
		<!-- Utilizando Bootstrap -->
		<br/><br/>
		<div class="container">
			<div class="col-sm-12 text-left lead">
					<strong>EDITAR SEDE</strong>
			</div>		
		</div>
		<div class="container">
			<!--@include('errors.503')-->		
			<form method="POST" action="/sedes/{{ $sede->id}}/edit" class="form-horizontal form-border">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<br/><br/>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">NOMBRE:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name='nombre' id="nombre-sede" value="{{$sede->nombre}}" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">DIRECCION:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="direccion" id="direccion-sede" value="{{$sede->direccion}}" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">DISTRITO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="distrito" id="distrito-sede" value="{{$sede->distrito}}" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">PROVINCIA:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="provincia" id="provincia-sede" value="{{$sede->provincia}}" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">DEPARTAMENTO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="departamento" id="departamento-sede" value="{{$sede->departamento}}" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">CAPACIDAD:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="capacidad" id="capacidad-sede" value="{{$sede->capacidad}}" style="max-width: 100px">
					</div>
				</div>
				<br/>
				<br/>
				<br/>
				<div class="form-group">
					<div class="col-sm-6 text-center">
						<input type="submit" value="Confirmar">
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