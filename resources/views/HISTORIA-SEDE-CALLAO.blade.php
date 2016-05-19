<!DOCTYPE html>
<html>
<head>
	<title>Historia de sede Callao </title>
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

	<div class="content" style="max-width: 100%;">
	<div class="container" id="ruta-navegacion">
		<br/>
		<div class="row">
			<a class="btn btn-link text-left withoutpadding" href="/">INICIO <span class="glyphicon glyphicon-chevron-right"></span></a>
			<button class="btn btn-link text-left withoutpadding" href="#">SEDES <span class="glyphicon glyphicon-chevron-right"></span></button>
			<label class="text-left withoutpadding">CALLAO</button>

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
			<div class="col-sm-12 text-left">
				<strong>Infraestructura</strong>	
				<p>
					<br/>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus excepturi distinctio quis quia culpa aliquam inventore sint maxime eveniet est voluptates eius quam, dolorem laborum odio rem voluptatibus eum harum!
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quia deserunt veniam maiores tenetur autem doloribus eum illo nulla inventore ducimus, commodi enim! Amet voluptatum libero quo exercitationem, porro quibusdam!

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi pariatur qui sint eaque. Quos odio iste tempore 
				</p>
			</div>
		</div>
	</div>
		<div class="container">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			  Launch demo modal
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 4; position:relative;>
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
			      </div>
			      <div class="modal-body">
			        ...
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-left">
					<button class="btn btn-link" onclick="openHistoriaCallao()">Continuar leyendo</button>			
				</div>
				<div class="col-sm-6 text-right">
					<button class="btn btn-link" href="#">Ver en Mapa</button>
				</div>
			</div>
			<br/>
			<br/>
		</div>
			
	</div>
@stop
  <script src="js/jquery-1.11.3.min.js"></script>
  <!-- Bootstrap -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- BXSlider -->
  <script src="js/jquery.bxslider.min.js"></script>
  <!-- Mis Scripts -->
  <script src="js/MisScripts.js"></script>    

  

</body>
</html>