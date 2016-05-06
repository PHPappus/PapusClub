<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR NUEVO USUARIO</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo Html::style('css/jquery.bxslider.css'); ?>

	<?php echo Html::style('css/font-awesome.css'); ?>

	<?php echo Html::style('css/bootstrap.css'); ?>

	<?php echo Html::style('css/MisEstilos.css'); ?>

<!-- 	<link rel="stylesheet" href="css/jquery.bxslider.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/MisEstilos.css"> -->
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
					<p class="lead"><strong>CREAR NUEVO USUARIO</strong></p>
				</div>
			</div>	
		</div>
		<div class="container">
			<?php echo Form::open(['route'=>'usuario.store', 'method'=>'POST', 'class' =>'form-horizontal form-border']); ?>

				<br/><br/>
				<?php echo $__env->make('usuario.forms.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<div class="form-group">
					<div class="col-sm-12 text-center">
						<?php echo Form::submit('Registrar',['class'=>'btn btn-lg btn-primary']); ?>

					</div>	
				</div>
			<?php echo Form::close(); ?>

		</div>
	</div>		
<?php $__env->stopSection(); ?>
<!-- JQuery -->

	<?php echo Html::script('js/jquery-1.11.3.min.js'); ?>

	<?php echo Html::script('js/bootstrap.js'); ?>

	<?php echo Html::script('js/jquery.bxslider.min.js'); ?>

	<?php echo Html::script('js/MisScripts.js'); ?>


	<!-- <script src="js/jquery-1.11.3.min.js"></script>
	Bootstrap
	<script type="text/javascript" src="js/bootstrap.js"></script>
	BXSlider
	<script src="js/jquery.bxslider.min.js"></script>
	Mis Scripts
	<script src="js/MisScripts.js"></script> -->


</body>
</html>
<?php echo $__env->make('layouts.headerandfooter-al-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>