<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR SEDE</title>
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
					<strong>EDITAR SEDE</strong>
			</div>		
		</div>
		<div class="container">
			<!--@include('errors.503')-->		
			<form method="POST" action="/sedes/{{ $sede->id }}/edit" class="form-horizontal form-border">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<br/><br/>

				<!-- INICIO INCIIO -->
				<div class="form-group">
		    		<label for="nombreInput" class="col-sm-4 control-label">Nombre</label>
		    		<div class="col-sm-5">
		      			<input type="text" class="form-control" id="nombreInput" name="nombre" value="{{$sede->nombre}}" >
		    		</div>
		  		</div>
			  	<div class="form-group">
			    	<label for="telefonoInput" class="col-sm-4 control-label">Teléfono</label>
			    	<div class="col-sm-5">
			      		<input type="number" class="form-control" id="telefonoInput" name="telefono" value="{{$sede->telefono}}" >
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label for="contactoInput" class="col-sm-4 control-label">Contacto</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="contactoInput" name="nombre_contacto" value="{{$sede->nombre_contacto}}">
			    	</div>
			  	</div>	  	
			  	<div class="form-group">
			    	<label for="capacidadInput" class="col-sm-4 control-label">Capacidad maxima</label>
			    	<div class="col-sm-5">
			      		<input type="number" class="form-control" id="capacidadInput" name="capacidad_maxima" value="{{$sede->capacidad_maxima}}" >
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="capacidadSocioInput" class="col-sm-4 control-label">Capacidad por socio</label>
			    	<div class="col-sm-5">
			      		<input type="number" class="form-control" id="capacidadSocioInput" name="capacidad_socio" value="{{$sede->capacidad_socio}}">
			    	</div>
			  	</div>
			  	
			  	<div class="form-group">
			    	<label for="departamentoInput" class="col-sm-4 control-label">Departamento</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="departamentoInput" name="departamento" value="{{$sede->departamento}}" readonly >
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="provinciaInput" class="col-sm-4 control-label">Provincia</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="provinciaInput" name="provincia" value="{{$sede->provincia}}" readonly >
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="distritoInput" class="col-sm-4 control-label">Distrito</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="distritoInput" name="distrito" value="{{$sede->distrito}}" readonly >
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="direccionInput" class="col-sm-4 control-label">Dirección</label>
			    	<div class="col-sm-5">
			      		<input type="text" class="form-control" id="direccionInput" name="direccion" value="{{$sede->direccion}}" >
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="referenciaInput" class="col-sm-4 control-label">Referencia </label>
			    	<div class="col-sm-5">
			      		<input type="comment" class="form-control" id="referenciaInput" name="referencia" value="{{$sede->referencia}}">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="activoInput" class="col-sm-4 control-label ">Activo</label>
			    	<div class="col-sm-3">
			      		<input type="checkbox"  class="checkbox" id="activoInput" name="estado" @if($sede['estado'] == true) checked @endif>
			    	</div>	    	
			  	</div>
					<!-- FIN FIN FIN  -->
				
				<br/>
				<br/>
				
				<div class="btn-inline">
					<div class="btn-group">
						<input class="btn btn-success" type="submit" value="Confirmar">
					</div>
					<div class="btngroup">
						<a href="/sedes/index" class="btn btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>		
@stop
<!-- JQuery -->
	{!!Html::script('../js/jquery-1.11.3.min.js')!!}
	{!!Html::script('../js/bootstrap.js')!!}
	{!!Html::script('../js/jquery.bxslider.min.js')!!}
	{!!Html::script('../js/MisScripts.js')!!}



</body>
</html>