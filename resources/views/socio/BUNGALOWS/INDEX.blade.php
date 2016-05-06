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
					<div class="col-sm-2">
						<ol class="breadcrumb">
							<li><a href="inicio-al-socio"><span class="glyphicon glyphicon-home"></span></a></li>
							<li class="active">Bungalows</li>
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
		<div class="container" style="margin-left: 347px" style="margin-right: 386px">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-center">
					<!--aqui debe haber una validacion si está logueado o no-->
						<button class="btn btn-primary" onclick="reservarBungalow()">RESERVAR BUNGALOW</button>		
					</div>
					<div class="col-sm-6 text-center">
						<button class="btn btn-primary" onclick="anularReservaBungalow()">ANULAR RESERVA DE BUNGALOW</button>		
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