<!DOCTYPE html>
<html>
<head>
	<title>CUENTA ADMIN PAGOS</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
</head>
<body>
@extends('layouts.headerandfooter-al-admin-pagos')
@section('content')
<!---Cuerpo -->
<main class="main">
	<div class="content" style="max-width: 100%;">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<ol class="breadcrumb">
						<li><a href="{{url('socio')}}"><span class="glyphicon glyphicon-home"></span></a></li>
						<li class="active">Cuenta</li>
					</ol>
				</div>				
			</div>
		</div>
		<!-- Utilizando Bootstrap -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-left">
					<p class="lead"><strong>CUENTA</strong></p>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div role="tabpanel">
						<ul class="nav nav-pills nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Datos Básicos</a></li>
							<li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">Ubicación</a></li>
							<li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">Educación/Trabajo</a></li>
							<li role="presentation"><a href="#seccion4" aria-controls="seccion4" data-toggle="tab" role="tab">Familiares</a></li>
							<li role="presentation"><a href="#seccion5" aria-controls="seccion5" data-toggle="tab" role="tab">Invitados</a></li>
							<li role="presentation"><a href="#seccion6" aria-controls="seccion6" data-toggle="tab" role="tab">Membresia</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="seccion1">
							<form action="" class="form-horizontal form-border">
								<br/><br/>
								<!-- <div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nro:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nro" placeholder="#####" style="max-width: 250px">
										</div>		
									</div>
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Fecha de Registro:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="fechaR" placeholder="MM/DD/YYYY" style="max-width: 250px">
										</div>		
									</div>
								</div> -->
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nombre:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nombre" placeholder="{!!Auth::user()->name!!}" style="max-width: 250px" disabled>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Apellidos:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="apellidos" placeholder="{!!Auth::user()->name!!}" style="max-width: 250px" disabled>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Tipo de Documento:</label>
										</div>
										<div class="col-sm-6">
											<select id="typedoc" class="form-control inputmodify" name="sede" style="max-width: 250px " >
								                <option value="dni" default>LIBRETA ELECTORAL O DNI</option>
												<option value="Casado">CARNET DE EXTRANJERIA</option>
					    					</select>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Documento de identidad:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control inputmodify" id="docidentity" placeholder="#######" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Fecha de Nacimiento:</label>
										</div>
										<div class="col-sm-6">
											<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="06/02/1990" type="text" id="dpd1" disabled>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Estado Civil:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control inputmodify" name="sede" style="max-width: 250px " >
								                <option value="Soltero" default>Soltero (a)</option>
												<option value="Casado">Casado (a)</option>
												<option value="Divorciado">Divorciado (a)</option>
												<option value="Separado">Separado (a)</option>
												<option value="Unión Libre">Unión Libre</option>
												<option value="Viudo">Viudo (a)</option>
					    					</select>
										</div>	
									</div>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="seccion2">
							<form action="" class="form-horizontal form-border">
								<br/><br/>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Lugar de Nacimiento:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="lugarnac" placeholder="LIMA" style="max-width: 250px" disabled>
										</div>		
									</div>
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nacionalidad:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " disabled>
								                <!-- <option value=""> --- </option> -->
								                <option value="Argentina" default> Perú </option>
								                <option value="Argentina"> Argentina </option>
								                <option value="Bolivia"> Bolivia </option>
								                <option value="Brasil"> Brasil </option>
								                <option value="Chile"> Chile </option>
								                <option value="Paraguay"> Paraguay </option>
								                <option value="Uruguay"> Uruguay </option>
					    					</select>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Dirección:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="address" placeholder="Mz Lt Calle Urb. Distrito" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Teléfono:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="telef" placeholder="Last name" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Celular:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="cellphone" placeholder="#######" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Correo:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " >
												<option value="" default> --- </option>
								                <option value="dni">LIBRETA ELECTORAL O DNI</option>
												<option value="carnet-extranjeria">CARNET DE EXTRANJERIA</option>
					    					</select>
										</div>	
									</div>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="seccion3">
							<form action="" class="form-horizontal form-border">
								<br/>
								<div class="container">
									<div class="row">
										<div class="col-sm-12 text-left">
											<p class="lead"><strong>EDUCACIÓN</strong></p>
										</div>
									</div>
								</div>
								<br/>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nivel de instrucción:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="nivel" style="max-width: 250px " >
												<option value="" default> --- </option>
								                <option value="superiores">Superiores</option>
												<option value="mediossup">Medios-Superiores</option>
												<option value="secundarios">Secundarios</option>
												<option value="profesional">Formación Profesional</option>
												<option value="primarios">Primarios y menos</option>
					    					</select>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Colegio Secundaria:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="colegio" placeholder="colegio" style="max-width: 250px">
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Carrera:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="carrera" placeholder="carrera" style="max-width: 250px">
										</div>	
									</div>
								</div>
							</form>
							<form action="" class="form-horizontal form-border">
								<br/>
								<div class="container">
									<div class="row">
										<div class="col-sm-12 text-left">
											<p class="lead"><strong>TRABAJO</strong></p>
										</div>
									</div>
								</div>
								<br/>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Centro de Trabajo:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="ctrabajo" placeholder="" style="max-width: 250px">
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Dirección:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="direccion" placeholder="AV Nro" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Teléfono:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="telefono" placeholder="telefono" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Cargo en Empresa:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="especialidad" placeholder="cargo" style="max-width: 250px">
										</div>	
									</div>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="seccion4">
							<form action="" class="form-horizontal form-border">
								<br/><br/>
								<div class="container">
									<div class="row">
										<div class="col-sm-12 text-left">
											<p class="lead"><strong>Cónyuge</strong></p>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nro:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nro" placeholder="#####" style="max-width: 250px" disabled>
										</div>		
									</div>
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Fecha de Registro:</label>
										</div>
										<div class="col-sm-6">
											<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="05/02/2016" type="text" id="fechaR1" disabled>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nombre:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nombre" placeholder="Name" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Apellidos:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="apellidos" placeholder="Last name" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Tipo de Documento:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " >
								                <option value="dni" default>LIBRETA ELECTORAL O DNI</option>
												<option value="Casado">CARNET DE EXTRANJERIA</option>
					    					</select>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Documento de identidad:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="docidentity" placeholder="#######" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Fecha de Nacimiento:</label>
										</div>
										<div class="col-sm-6">
											<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="05/02/1993" type="text" id="fechaN1" disabled>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Estado Civil:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " >
								                <option value="Soltero" default>Soltero (a)</option>
												<option value="Casado">Casado (a)</option>
												<option value="Divorciado">Divorciado (a)</option>
												<option value="Separado">Separado (a)</option>
												<option value="Unión Libre">Unión Libre</option>
												<option value="Viudo">Viudo (a)</option>
					    					</select>
										</div>	
									</div>
								</div>
							</form>
							<form action="" class="form-horizontal form-border">
								<br/><br/>
								<div class="container">
									<div class="row">
										<div class="col-sm-12 text-left">
											<p class="lead"><strong>Padre</strong></p>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nro:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nro" placeholder="#####" style="max-width: 250px" disabled>
										</div>		
									</div>
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Fecha de Registro:</label>
										</div>
										<div class="col-sm-6">
											<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="05/02/2016" type="text" id="fechaR2" disabled>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nombre:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nombre" placeholder="Name" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Apellidos:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="apellidos" placeholder="Last name" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Tipo de Documento:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " >
								                <option value="dni" default>LIBRETA ELECTORAL O DNI</option>
												<option value="Casado">CARNET DE EXTRANJERIA</option>
					    					</select>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Documento de identidad:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="docidentity" placeholder="#######" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Fecha de Nacimiento:</label>
										</div>
										<div class="col-sm-6">
											<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="05/02/1993" type="text" id="fechaN2" disabled>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Estado Civil:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " >
								                <option value="Soltero" default>Soltero (a)</option>
												<option value="Casado">Casado (a)</option>
												<option value="Divorciado">Divorciado (a)</option>
												<option value="Separado">Separado (a)</option>
												<option value="Unión Libre">Unión Libre</option>
												<option value="Viudo">Viudo (a)</option>
					    					</select>
										</div>	
									</div>
								</div>
							</form>
							<form action="" class="form-horizontal form-border">
								<br/><br/>
								<div class="container">
									<div class="row">
										<div class="col-sm-12 text-left">
											<p class="lead"><strong>Madre</strong></p>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nro:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nro" placeholder="#####" style="max-width: 250px" disabled>
										</div>		
									</div>
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Fecha de Registro:</label>
										</div>
										<div class="col-sm-6">
											<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="05/02/2016" type="text" id="fechaR3" disabled>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nombre:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nombre" placeholder="Name" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Apellidos:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="apellidos" placeholder="Last name" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Tipo de Documento:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " >
												<option value="" default>---- </option>
								                <option value="dni">LIBRETA ELECTORAL O DNI</option>
												<option value="Casado">CARNET DE EXTRANJERIA</option>
					    					</select>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Documento de identidad:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="docidentity" placeholder="#######" style="max-width: 250px">
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Fecha de Nacimiento:</label>
										</div>
										<div class="col-sm-6">
											<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="05/02/1993" type="text" id="fechaN2" disabled>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Estado Civil:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " >
								                <option value="Soltero" default>Soltero (a)</option>
												<option value="Casado">Casado (a)</option>
												<option value="Divorciado">Divorciado (a)</option>
												<option value="Separado">Separado (a)</option>
												<option value="Unión Libre">Unión Libre</option>
												<option value="Viudo">Viudo (a)</option>
					    					</select>
										</div>	
									</div>
								</div>
							</form>
							<form action="" class="form-horizontal form-border">
								<br/><br/>
								<div class="container">
									<div class="row">
										<div class="col-sm-12 text-left">
											<p class="lead"><strong>Hijos</strong></p>
										</div>
									</div>
								</div>
								<div class="table-responsive">
										<table class="table table-bordered table-hover text-center">
											<tr class="active">
												<td>Nro</td>
												<td>Documento</td>
												<td>Nombre</td>
												<td>Apellidos</td>
												<td>Edad</td>
											</tr>
											<tr>
												<td>562881</td>
												<td>48288457</td>
												<td>Juan</td>
												<td>Perez Ramirez</td>
												<td>16</td>
											</tr>
											<tr>
												<td><input type="text"></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
										</table>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="seccion5">
							<form action="" class="form-horizontal form-border">
								<br/><br/>
								<div class="container">
									<div class="row">
										<div class="col-sm-8 text-left">
											<p class="lead"><strong>Registro de Invitados</strong></p>
										</div>
										<div class="col-sm-4">
												<p><em>Usted puede tener "x" invitados</em></p>		
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-sm-9">
											<div class="table-responsive">
													<table id="table1" class="table table-bordered table-hover text-center">
														<tr class="active">
															<td>Tipo de<br>Documento</td>
															<td>Documento</td>
															<td>Apellidos</td>
															<td>Nombre</td>
															<td>Estado civil</td>
															<td>Correo</td>
															<td>Eliminar</td>
														</tr>
														<tr>
															<td>DNI</td>
															<td>48755121</td>
															<td>Perez Ramirez</td>
															<td>Juan</td>
															<td>Viudo</td>
															<td>jperez@papusclub.com</td>
															<td><input type="checkbox"></td>
														</tr>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</table>
											</div>	
										</div>
										<div class="col-sm-3 text-left">
											<button class="btn" onclick="agregar_fila_invitado()">Agregar Invitado</button>
											<br/><br/><br/>
											<button class="btn" onclick="eliminiar_filas_invitados()">Eliminar Invitados Seleccionados</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="seccion6">
							<form action="" class="form-horizontal form-border">
								<br/><br/>
								<div class="container">
									<div class="row">
										<div class="col-sm-12 text-left">
											<p class="lead"><strong>Cónyuge</strong></p>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nro:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nro6" placeholder="#####" style="max-width: 250px" disabled>
										</div>		
									</div>
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Última actualización:</label>
										</div>
										<div class="col-sm-6">
											<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="05/02/2016" type="text" id="fechaR6-1" disabled>
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Tipo de Socio:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="tiposocio" style="max-width: 250px " disabled>
								                <option value="ordinario" default>Ordinario</option>
								                <option value="Suspendido">Suspendido</option>
												<option value="Vitalicio">Vitalicio</option>
					    					</select>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
											<div class="col-sm-6 text-left">
												<label for="" class="control-label">Fecha de Renovación:</label>
											</div>
											<div class="col-sm-6">
												<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="05/02/2017" type="text" id="fechaR6-2" disabled>
											</div>		
									</div>								
								</div>
								<div class="form-group">
									<div class="col-sm-6">
											<div class="col-sm-6 text-left">
												<label for="" class="control-label">Socio desde:</label>
											</div>
											<div class="col-sm-6">
												<input class="form-control datepicker"  placeholder="MM/DD/YYYY" value="05/02/2015" type="text" id="fechaR6-3" disabled>
											</div>		
									</div>
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Años:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="anhos" placeholder="N° años" value="1" style="max-width: 250px" disabled>
										</div>		
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div> 	
			<br/><br/>
			<div class="row">
				<div class="col-sm-12 text-center">
							<button id="btn-savechanges1" class="btn btn-lg btn-primary" onclick="guardar_cambios_cuenta()" disabled>Guardar Cambios</button>	
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

	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script>
		var nowTemp = new Date();
		var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
 
		var checkin = $('#dpd1').datepicker({
  			onRender: function(date) {
    			return date.valueOf() < now.valueOf() ? 'disabled' : '';
  			}
		}).on('changeDate', function(ev) {
  			if (ev.date.valueOf() > checkout.date.valueOf()) {
    			var newDate = new Date(ev.date)
    			newDate.setDate(newDate.getDate() + 1);
    			checkout.setValue(newDate);
  			}
 			checkin.hide();
  			$('#dpd2')[0].focus();
		}).data('datepicker');
	</script>
	<script>
		$(function(){
			$('.datepicker').datepicker();
		});
	</script>
	


</body>
</html>