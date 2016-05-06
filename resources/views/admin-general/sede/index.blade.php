<!DOCTYPE html>
<html>
<head>
	<title>SEDE</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	{!!Html::style('css/jquery.bxslider.css')!!}
	{!!Html::style('css/font-awesome.css')!!}
	{!!Html::style('css/bootstrap.css')!!}
	{!!Html::style('css/MisEstilos.css')!!}
<!-- 	<link rel="stylesheet" href="css/jquery.bxslider.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/MisEstilos.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
	
</head>
<body>
@extends('layouts.headerandfooter-al-admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="lead"><strong>TODAS LAS SEDES</strong></p>
			</div>
			
		</div>
	</div>

	<div class="container">
			<table class="table table-bordered table-hover text-center">
					<thead class="active">
						<th>NOMBRE DE SEDE</th>
						<th>DIRECCIÓN</th>
						<th>DISTRITO</th>
						<th>PROVINCIA</th>
						<th>DEPARTAMENTO</th>
						<th>CAPACIDAD</th>
					</thead>
					@foreach($sedes as $sede)
						<tbody>
							<td>{{ $sede->nombre }}</td>
							<td>{{ $sede->direccion }}</td>
							<td>{{ $sede->distrito }}</td>
							<td>{{ $sede->provincia }}</td>
							<td>{{ $sede->departamento }}</td>
							<td>{{ $sede->capacidad }}</td>
						</tbody>
					@endforeach
				</table>		
		</div>


@stop
{!!Html::script('js/jquery-1.11.3.min.js')!!}
	{!!Html::script('js/bootstrap.js')!!}
	{!!Html::script('js/jquery.bxslider.min.js')!!}
	{!!Html::script('js/MisScripts.js')!!}

	<!-- <script src="js/jquery-1.11.3.min.js"></script>
	Bootstrap
	<script type="text/javascript" src="js/bootstrap.js"></script>
	BXSlider
	<script src="js/jquery.bxslider.min.js"></script>
	Mis Scripts
	<script src="js/MisScripts.js"></script> -->


</body>
</html>