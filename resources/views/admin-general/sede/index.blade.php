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
	
</head>
<body>
@extends('layouts.headerandfooter-al-admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<br/><br/>
				<p class="lead"><strong>SEDES</strong></p>
				<br/>
			</div>
			
		</div>
	</div>
	<div class="container">
		<div class="form-group">
			<div class="col-sm-16 text-center">
				<a class="btn btn-info" href="{{url('/sedes/new')}}" title="Registrar Sede" ><i class="glyphicon glyphicon-plus" ></i> </a>	
			</div>
		</div>
		<br/>
	</div>
		<div class="table-responsive">
			<div class="container">
				<table class="table table-bordered table-hover text-center">
						<thead class="active">
							<th><div align=center>SEDE</div> </th>
							<th><div align=center>DEPARTAMENTO</div></th>
							<th><div align=center>DIRECCION</div></th>
							<th><div align=center>CAPACIDAD</div></th>
							<th><div align=center>DETALLE</div></th>
							<th><div align=center>EDITAR</div></th>
							<th><div align=center>ELIMINAR</div></th>
						</thead>

						@foreach($sedes as $sede)						
							<tbody>
								<td>{{ $sede->nombre }}</td>
								<td>{{ $sede->distrito }}</td>
	 							<td>{{ $sede->departamento }}</td>
								<td>{{ $sede->capacidad_maxima }}</td>
								<td>
					              <a class="btn btn-info" href="{{url('/sedes/'.$sede->id.'/show')}}"  title="Detalle" ><i class="glyphicon glyphicon-list-alt"></i></a>
					            </td>
								<td>
					              <a class="btn btn-info" href="{{url('/sedes/'.$sede->id.'')}}" title="Editar" ><i class="glyphicon glyphicon-pencil"></i></a>
					            </td>
					            <td>
					              <a class="btn btn-info" href="{{url('/sedes/'.$sede->id.'/delete')}}" title="Eliminar" ><i class="glyphicon glyphicon-remove"></i></a>
					            </td>
					            
							</tbody>						
						@endforeach
				</table>			
			</div>		
		</div>
	

		


@stop
	{!!Html::script('js/jquery-1.11.3.min.js')!!}
	{!!Html::script('js/bootstrap.js')!!}
	{!!Html::script('js/jquery.bxslider.min.js')!!}
	{!!Html::script('js/MisScripts.js')!!}

</body>
</html>