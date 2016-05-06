<!DOCTYPE html>
<html>
<head>
	<title>Historia Papus Club</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	
</head>

<body>
<!--Cabecera- Se separará espacio para el input de busqueda antes de la cabecera de menu-->


<main class="main">
	<div class="content" style="max-width: 100%;">
	<div class="container" id="ruta-navegacion">
		<br/>
		<div class="row">
			<a class="btn btn-link text-left withoutpadding" href="/">INICIO <span class="glyphicon glyphicon-chevron-right"></span></a>
			<button class="btn btn-link text-left withoutpadding" href="#">PAPUS CLUB <span class="glyphicon glyphicon-chevron-right"></span></button>
			<button class="btn btn-link text-left withoutpadding" href="historia-papusclub">A CERCA DEL CLUB <span class="glyphicon glyphicon-chevron-right"></span></button>
			<label class="text-left withoutpadding">HISTORIA </button></label>

		</div>
		<br/>
	</div>
	<div class="container">
		<div class="row">
  			<div class="col-sm-12 withoutpadding">
  			<!-- bxslider es un plugin que permite crear sucesión de imagenes -->
                <ul class="bxslider">
                	<li><img class="slider img-responsive" src="images/historico.jpg" /></li>
                    <li><img class="slider img-responsive" src="images/papushistory1.jpg" /></li>  
                </ul>  						
  			</div>
  			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="lead"><strong>HISTORIA DEL CLUB</strong></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-left">
				<strong>HISTORIA DEL CLUB</strong>
				<p>
				<br/>
				<table class="table">
						<thead>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Operacion</th>
						</thead>
						<?php foreach($users as $user): ?>
							<tbody>
								<td><?php echo e($user->name); ?></td>
								<td><?php echo e($user->email); ?></td>
								<td>
									<?php echo link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary']); ?>

								</td>
							</tbody>
						<?php endforeach; ?>
						<?php echo $users->render(); ?>

				</table>
				</p>
			</div>
		</div>
	</div>
	<div class="container">
			<div class="row">
				<div class="col-sm-6 text-left">
					<button class="btn btn-link" onclick="openHistoriaPapusClub()">Continuar leyendo</button>			
				</div>
				<div class="col-sm-6 text-right">
					<button class="btn btn-link" href="#">Ver en Mapa</button>
				</div>
			</div>
			<br/>
			<br/>
	</div>
	</div>
</main>

<!--Pie de págna-->

<footer class="footer">
	<div class="content clearfix">
		<div class="footer-1">
			<div class="logofoot">
				<img alt="Papus Club" src="images/logo-min.png" title="Papus Club">				
			</div>
			<div class="contacto">
				<ul class="info">
					<li><a href="#" title="telefono">(51) 1 523 4910</a></li>
					<li><span><img class="PointImg" src="images/punto.png" width="3px" height="3px"></img></span></li>
					<li><a href="#" title="e-mail">papus@clubpapus.org.pe</a></li>
				</ul>
				<ul class="terminos-condiciones">
					<li><a href="#" title="Terminos y Condiciones">TÉRMINOS Y CONDICIONES</a></li>
					<li><span><img class="PointImg" src="images/punto.png" width="3px" height="3px"></img></span></li>
					<li><a href="#" title="Privacidad">PRIVACIDAD</a></li>
					<li><span><img class="PointImg" src="images/punto.png" width="3px" height="3px"></img></span></li>
					<li><a href="#" title="MAPA DE SITIO">MAPA DE SITIO</a></li>
				</ul>
				
			</div>
		</div>
	</div>
</footer>

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