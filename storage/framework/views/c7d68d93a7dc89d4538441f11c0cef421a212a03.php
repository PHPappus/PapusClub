<!DOCTYPE html>
<html>
<head>
	<title>Registros de usuarios</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/MisEstilos.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
	
</head>
<body>

<?php $__env->startSection('content'); ?>
<!---Cuerpo -->
<main class="main">
	<div class="content" style="max-width: 100%;">
		<!-- Utilizando Bootstrap -->
		<?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<br/><br/>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-left">
					<p class="lead"><strong>REGISTROS DE USUARIOS</strong></p>
				</div>
			</div>	
		</div>
		<div class="container">
			<table class="table table-bordered table-hover text-center">
					<thead>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Contraseña</th>
						<th>Tipo</th>
					</thead>
					<?php foreach($users as $user): ?>
						<tbody>
							<td><?php echo e($user->name); ?></td>
							<td><?php echo e($user->email); ?></td>
							<td><?php echo e($user->password); ?></td>
							<td><?php echo e($user->type); ?></td>
						</tbody>
					<?php endforeach; ?>
				</table>
				
				
		</div>
		<div class="container">
			<div class="form-group">
				<div class="col-sm-12 text-center">
					<button class="btn btn-primary" onclick="registrarNuevoUsuario()">REGISTRAR NUEVO USUARIO</button>	
				</div>
			</div>
		</div>
	</div>		
<?php $__env->stopSection(); ?>
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
<?php echo $__env->make('layouts.headerandfooter-al-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>