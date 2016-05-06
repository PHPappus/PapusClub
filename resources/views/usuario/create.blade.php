<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR NUEVO USUARIO</title>
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
<!---Cuerpo -->
<main class="main">
	<div class="content" style="max-width: 100%;">
		<!-- Utilizando Bootstrap -->
		@include('alerts.success')
		<br/><br/>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-left">
					<p class="lead"><strong>CREAR NUEVO USUARIO</strong></p>
				</div>
			</div>	
		</div>
		<div class="container">
			{!!Form::open(['route'=>'usuario.store', 'method'=>'POST', 'class' =>'form-horizontal form-border'])!!}
				<br/><br/>
				@include('usuario.forms.user')
				<div class="form-group">
					<div class="col-sm-12 text-center">
						{!!Form::submit('Registrar',['class'=>'btn btn-lg btn-primary'])!!}
					</div>	
				</div>
			{!!Form::close()!!}
		</div>
	</div>		
@stop
<!-- JQuery -->

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