<!DOCTYPE html>
<html>
<head>
	<title>Historia Sede Callao ver mas</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	
</head>

<body>

@extends('layouts.headerandfooter')
@section('content')
<!---Cuerpo -->
	<div class="content" style="max-width: 100%;">
	<div class="container" id="ruta-navegacion">
		<br/>
		<div class="row">
			<a class="btn btn-link text-left withoutpadding" href="inicio">INICIO <span class="glyphicon glyphicon-chevron-right"></span></a>
			<button class="btn btn-link text-left withoutpadding" href="#">SEDES <span class="glyphicon glyphicon-chevron-right"></span></button>
			<label class="text-left withoutpadding">CALLAO</button></label>

		</div>
		<br/>
	</div>
	<div class="container">
		<div class="row">
  			<div class="col-sm-12 withoutpadding">
  			<!-- bxslider es un plugin que permite crear sucesión de imagenes -->
                <ul class="bxslider">
                	<li><img class="slider img-responsive" src="images/bungalow4.jpg" /></li>
                    <li><img class="slider img-responsive" src="images/bungalow3.jpg" /></li> 
                    <li><img class="slider img-responsive" src="images/bungalow1.jpg" /></li>  
                </ul>  						
  			</div>
  			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="lead"><strong>HISTORIA CALLAO</strong></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-left">
				<strong>Historia</strong>
				<p>
					<br/>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure odit totam voluptate, quisquam earum facere fugiat harum non iste voluptatibus rerum dolorum, pariatur, aut natus dolor. Est vitae expedita ipsam.lore
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ipsam, quos. In animi aliquid debitis officia officiis tempore labore ipsum placeat harum, vitae fuga perspiciatis possimus odit. Aut, nisi, tempore!
				</p>
			</div>
			<div id="marca" class="col-sm-12 text-left">
				<strong>Infraestructura</strong>	
				<p align="justify">
					<br/>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus excepturi distinctio quis quia culpa aliquam inventore sint maxime eveniet est voluptates eius quam, dolorem laborum odio rem voluptatibus eum harum!
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quia deserunt veniam maiores tenetur autem doloribus eum illo nulla inventore ducimus, commodi enim! Amet voluptatum libero quo exercitationem, porro quibusdam!
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.					
				</p>
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