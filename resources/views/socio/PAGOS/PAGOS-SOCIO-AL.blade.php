<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	
</head>
<body>
@extends('layouts.headerandfooter-al-socio')
@section('content')
<!---Cuerpo -->

<main class="main">
	<div class="content" style="max-width: 100%;">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<ol class="breadcrumb">
						<li><a href="socio"><span class="glyphicon glyphicon-home"></span></a></li>
						<li class="active">Pagos</li>
					</ol>
				</div>				
			</div>
		</div>
		<!-- Utilizando Bootstrap -->
		<br/><br/>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-left">
					
					<p class="lead"><strong>PAGOS PENDIENTES</strong></p>
					<p class="lead"><pre><strong>PAGO # - FECHA DE VENCIMIENTO- MONTO- MORA(SI LO HAY)- MONTO TOTAL -   MONEDA     -  ESTADO</strong></pre></p>
					<br/>
					<p><pre>PAGO 6  -     12/06/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  PENDIENTE</pre></p>
					<p><pre>PAGO 7  -     12/07/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  PENDIENTE</pre></p>
					<p><pre>PAGO 8  -     12/08/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  PENDIENTE</pre></p>
					<p><pre>PAGO 9  -     12/09/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  PENDIENTE</pre></p>
					<p><pre>PAGO 10 -     12/10/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  PENDIENTE</pre></p>
					<p><pre>PAGO 11 -     12/11/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  PENDIENTE</pre></p>
					<p><pre>PAGO 12 -     12/12/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  PENDIENTE</pre></p>
					<p class="lead"><strong>PAGOS CANCELADOS</strong></p>
					<p class="lead"><pre><strong>PAGO # - FECHA DE VENCIMIENTO- MONTO- MORA(SI LO HAY)- MONTO TOTAL -   MONEDA     -  ESTADO</strong></pre></p>
					<br/>
					<p><pre>PAGO 1 -      12/01/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  CANCELADA</pre></p>
					<p><pre>PAGO 2 -      12/02/2016     - 1000 -       100      -    1100     - NUEVOS SOLES -  CANCELADA</pre></p>
					<p><pre>PAGO 3 -      12/03/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  CANCELADA</pre></p>
					<p><pre>PAGO 4 -      12/04/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  CANCELADA</pre></p>
					<p><pre>PAGO 5 -      12/05/2016     - 1000 -       --       -    1000     - NUEVOS SOLES -  CANCELADA</pre></p>
				</div>	
			</div>
		</div>
	</div>		
</main>

<!--Pie de págna-->
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