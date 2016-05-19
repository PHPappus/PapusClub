<!DOCTYPE html>
<html>
<head>
	<title>Registros de usuarios</title>
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
		@include('alerts.success')
		<br/><br/>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-left">
					<p class="lead"><strong>USUARIOS REGISTRADOS</strong></p>
				</div>
			</div>	
		</div>
		<div class="container">
			<table class="table table-bordered table-hover text-center">
					<thead>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Contraseña</th>
						<th>Perfil</th>
					</thead>
					@foreach($users as $user)
						<tbody>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->password}}</td>
							<td>{{$user->perfil_id}}</td>
						</tbody>
					@endforeach
				</table>		
		</div>
		<div class="container">
			<div class="form-group">
				<div class="col-sm-12 text-center">
					<button class="btn btn-primary" onclick="registrarNuevoUsuario()">REGISTRAR NUEVO USUARIO</button>	
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