<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR SEDE</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	{!!Html::style('../css/jquery.bxslider.css')!!}
	{!!Html::style('../css/font-awesome.css')!!}
	{!!Html::style('../css/bootstrap.css')!!}
	{!!Html::style('../css/MisEstilos.css')!!}
	
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
			<div class="col-sm-12 text-left lead">
					<strong>REGISTRAR SEDE</strong>
			</div>		
		</div>
		<div class="container">
			<!--@include('errors.503')-->		
			<form method="POST" action="/sedes/new/sede" class="form-horizontal form-border">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<br/><br/>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">NOMBRE:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name='nombre' id="nombre-sede" placeholder="NOMBRE" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">DIRECCION:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="direccion" id="direccion-sede" placeholder="DIRECCION" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">DISTRITO:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="distrito" id="distrito-sede" placeholder="DISTRITO" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">PROVINCIA:</label>
					<div class="col-sm-7">
						<input type="text"  class="form-control" name="provincia" id="provincia-sede" placeholder="PROVINCIA" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">DEPARTAMENTO:</label>
					<div class="col-sm-7">
						<input type="text"  class="form-control" name="departamento" id="departamento-sede" placeholder="DEPARTAMENTO" style="max-width: 250px">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-5">CAPACIDAD:</label>
					<div class="col-sm-7">
						<input type="number" pattern = "[0-9]{0,100000}" class="form-control" name="capacidad" id="capacidad-sede" placeholder="CAPACIDAD" style="max-width: 100px">
					</div>
				</div>
				<br/>
				<br/>
				<br/>
				<div class="form-group">
					<div class="col-sm-6 text-center">
						<input class="btn btn-success" href="{{action('SedesController@index')}}" type="submit" value="Confirmar">
					</div>
					<div class="col-sm-6 text-center">
						<a href="/sedes/index" class="btn btn-danger">Cancelar</a>
					</div>
					
				</div>
			</form>
		</div>
	</div>		
@stop
<!-- JQuery -->
	<script src="../js/jquery-1.11.3.min.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<!-- BXSlider -->
	<script src="../js/jquery.bxslider.min.js"></script>
	<!-- Mis Scripts -->
	<script src="../js/MisScripts.js"></script>


</body>
</html>