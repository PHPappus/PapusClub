<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR SEDE</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	{!!Html::style('/css/jquery.bxslider.css')!!}
	{!!Html::style('/css/font-awesome.css')!!}
	{!!Html::style('/css/bootstrap.css')!!}
	{!!Html::style('/css/MisEstilos.css')!!}
	
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
			<form method="POST" action="/sedes/new/sede" class="form-horizontal form-border">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
				<br/><br/>
				
				<div class="form-group required">
			    	<label for="nombreInput" class="col-sm-4 control-label">Nombre</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="nombreInput" name="nombre" placeholder="Nombre" required>
			    	</div>
			  	</div>

			  	<div class="form-group required">
			    	<label for="telefonoInput" class="col-sm-4 control-label">Teléfono</label>
			    	<div class="col-sm-5">
			      		<input type="number" class="form-control" id="telefonoInput" name="telefono" placeholder="Teléfono" required>
			    	</div>
			  	</div>

			  	<div class="form-group required">
			    	<label for="contactoInput" class="col-sm-4 control-label">Contacto</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="contactoInput" name="nombre_contacto" placeholder="Contacto" required>
			    	</div>
			  	</div>	  	

			  	<div class="form-group required">
			    	<label for="capacidadInput" class="col-sm-4 control-label">Capacidad maxima</label>
			    	<div class="col-sm-5">
			      		<input type="number" class="form-control" id="capacidadInput" name="capacidad_maxima" placeholder="Capacidad" required>
			    	</div>
			  	</div>

			  	<div class="form-group required">
			    	<label for="capacidadSocioInput" class="col-sm-4 control-label">Capacidad por socio</label>
			    	<div class="col-sm-5">
			      		<input type="number" class="form-control" id="capacidadSocioInput" name="capacidad_socio" placeholder="Capacidad por Socio" required>
			    	</div>
			  	</div>
			  	
			  	<div class="form-group required">
			    	<label for="departamentoInput" class="col-sm-4 control-label">Departamento</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="departamentoInput" name="departamento" placeholder="Departamento" required>
			    	</div>
			  	</div>

			  	<div class="form-group required">
			    	<label for="provinciaInput" class="col-sm-4 control-label">Provincia</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="provinciaInput" name="provincia" placeholder="Provincia" required>
			    	</div>
			  	</div>

			  	<div class="form-group required">
			    	<label for="distritoInput" class="col-sm-4 control-label">Distrito</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="distritoInput" name="distrito" placeholder="Distrito" required>
			    	</div>
			  	</div>

			  	<div class="form-group required">
			    	<label for="direccionInput" class="col-sm-4 control-label">Dirección</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="direccionInput" name="direccion" placeholder="Dirección" required>
			    	</div>
			  	</div>

			  	<div class="form-group required">
			    	<label for="referenciaInput" class="col-sm-4 control-label">Referencia </label>
			    	<div class="col-sm-5">
			      		<input type="comment" class="form-control" id="referenciaInput" name="referencia" placeholder="Referencia" required>
			    	</div>
			  	</div>

			  	<div class="form-group">
			  		<div class="text-center">
			  			<font color="red"> 
			  				*Dato Obligatorio
			  			</font>		  			
			  		</div>
			  	</div>
			  	
				<div class="row">
					<div class="col-sm-6 text-right">
						<input class="btn btn-success" type="submit" value="Confirmar">
					</div>
					<div class="col-sm-6 text-left">
						<a href="/sedes/index" class="btn btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>		
@stop
<!-- JQuery -->
	<script src="/js/jquery-1.11.3.min.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="/js/bootstrap.js"></script>
	<!-- BXSlider -->
	<script src="/js/jquery.bxslider.min.js"></script>
	<!-- Mis Scripts -->
	<script src="/js/MisScripts.js"></script>


</body>
</html>