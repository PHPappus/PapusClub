<!DOCTYPE html>
<html>
<head>
	<title>Reserva Bungalow</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/MisEstilos.css"> 

	
</head>

<body>
@extends('layouts.headerandfooter-al-socio')
@section('content')
	<div class="content" style="max-width: 100%;">
		<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<ol class="breadcrumb">
							<li><a href="inicio-al-socio"><span class="glyphicon glyphicon-home"></span></a></li>
							<li><a href="bungalows-s">Bungalows</a></li>
							<li class="active">Reservar Bungalow</li>
						</ol>
					</div>				
				</div>
		</div>
	
		<div class="container">
			<div class="row">
	  			<div class="col-sm-12 withoutpadding">
	  			<!-- bxslider es un plugin que permite crear sucesión de imagenes -->
	                <ul class="bxslider">
	                	<li><img class="slider img-responsive" src="images/bungalow4.jpg" /></li>
	                    <li><img class="slider img-responsive" src="images/bungalow3.jpg" /></li> 
	                    <li><img class="slider img-responsive" src="images/bungalow2.jpg" /></li> 
	                    <li><img class="slider img-responsive" src="images/bungalow1.jpg" /></li>    
	                </ul>  						
	  			</div>
	  			
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<p><strong>RESERVA DE BUNGALOW EN CALLAO</strong></p>
				</div>
			</div>
			<div class="container rango-fechas">
				<div class ="content">
						<div class="row">
							<div class="col-sm-4 text-center">
								<label>Fecha Ingreso:</label>
								<input class="datepicker" type="text" id="dpd1" readonly="true">
							</div>
							<div class="col-sm-4 col-sm-offset-4 text-center">
								<label>Fecha Salida:</label>
								<input class="datepicker" type="text" id="dpd2" readonly="true">
							</div>								
						</div>
				</div>
				<div class ="content">
						<div class="row">
			  				<div class="col-sm-4 text-center"></div>
			  				<div class="col-sm-4 text-center"style="padding-top: 36px">
			  					<button type="button" class="btn btn-lg btn-primary">
			    					<span class="glyphicon glyphicon-search"></span> Buscar Reserva
			  					</button>		  					
			  				</div>
			  				<div class="col-sm-4 text-center"></div>				
						</div>
				</div>	
			</div>
			</div>	
			<br/>
			<br/>
			<div id="marca"class="table-responsive">
				<div class="container">
					<table class="table table-bordered table-hover text-center">
						<tr class="active">
							<td>TIPO</td>
							<td>CANTIDAD DISPONIBLE</td>
							<td>CANTIDAD ELEGIDA</td>
							<td>SELECCIONAR</td>
						</tr>
						<tr>
							<td>Pequeño</td>
							<td>5</td>
							<td>
								<div class="col-sm-2 col-sm-offset-5 text-center selectContainer">
									<select class="form-control" name="size" style="width: 60px ">
								                <option value="1" default>1</option>
								                <option value="2">2</option>
								                <option value="3">3</option>
								                <option value="4">4</option>
								                <option value="5">5</option>
								    </select>
								</div>
							</td>
							<td><input type="radio" aria-label=""></td>
						</tr>
						<tr>
							<td>Mediano</td>
							<td>3</td>
							<td>
								<div class="col-sm-2 col-sm-offset-5 text-center selectContainer">
									<select class="form-control" name="size" style="width: 60px ">
								                <option value="1" default>1</option>
								                <option value="2">2</option>
								                <option value="3">3</option>
								    </select>
								</div>
							</td>
							<td><input type="radio" aria-label=""></td>
						</tr>
						<tr>
							<td>Grande</td>
							<td>2</td>
							<td>
								<div class="col-sm-2 col-sm-offset-5 text-center selectContainer">
									<select class="form-control" name="size" style="width: 60px ">
								                <option value="1" default>1</option>
								                <option value="2">2</option>						                
								    </select>
								</div>
							</td>
							<td><input type="radio" aria-label=""></td>
						</tr>
					</table>
				</div>	
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 text-right">
						<button class="btn btn-primary">RESERVAR</button>
					</div>
					<div class="col-sm-4 text-center">
						<button class="btn btn-primary">ATRAS</button>
					</div>
					<div class="col-sm-4 text-left">
						<button class="btn btn-primary">LIMPIAR</button>
					</div>
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

		var checkout = $('#dpd2').datepicker({
  			onRender: function(date) {
    			return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
  			}
		}).on('changeDate', function(ev) {
  			checkout.hide();
		}).data('datepicker');		
	</script>
	<script>
		$(function(){
			$('.datepicker').datepicker();
		});
	</script>

</body>

</html>