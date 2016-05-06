<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR POSTULANTE</title>
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
@extends('layouts.headerandfooter-al-admin')
@section('content')
<!---Cuerpo -->
<main class="main">
	<div class="content" style="max-width: 100%;">
		<!-- Utilizando Bootstrap -->
		<br/><br/>
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
							<li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">Educación</a></li>
							<li role="presentation"><a href="#seccion4" aria-controls="seccion4" data-toggle="tab" role="tab">Familiares</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="seccion1">
							<form action="" class="form-horizontal form-border">
								<br/><br/>
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
											<input type="text" class="form-control" id="fechaN" placeholder="MM/DD/YYYY" style="max-width: 250px">
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
											<input type="text" class="form-control" id="lugarnac" placeholder="#####" style="max-width: 250px">
										</div>		
									</div>
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nacionalidad:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " >
								                <option value="" default> --- </option>
								                <option value="Argentina"> Perú </option>
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
								<br/><br/>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Nivel de instrucción:</label>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="sede" style="max-width: 250px " >
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
											<label for="" class="control-label">Educación Secundaria (o superior):</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="edusecosup" placeholder="Educación" style="max-width: 250px">
										</div>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<div class="col-sm-6 text-left">
											<label for="" class="control-label">Especialidad:</label>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="especialidad" placeholder="Especialidad" style="max-width: 250px">
										</div>	
									</div>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="seccion4">
							<form action="" class="form-horizontal form-border">
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
											<input type="text" class="form-control" id="fechaN" placeholder="MM/DD/YYYY" style="max-width: 250px">
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
											<input type="text" class="form-control" id="fechaN" placeholder="MM/DD/YYYY" style="max-width: 250px">
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
											<input type="text" class="form-control" id="fechaN" placeholder="MM/DD/YYYY" style="max-width: 250px">
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
					</div>
				</div>
			</div> 	
			<br/><br/>
			<div class="row">
				<div class="col-sm-12 text-center">
							<button class="btn btn-lg btn-primary" onclick="guardar_cambios_cuenta()">Guardar</button>	
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