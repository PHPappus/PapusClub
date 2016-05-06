@extends('layouts.layout')

@section('content')
	<h1>Todas las Sedes</h1>
	@foreach ($sedes as $sede)
		<div>
			{{ $sede->nombre }}
		</div>
	@endforeach	

@stop