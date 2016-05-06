
<div class="form-group text-left">
		<label for="Nombre" class="control-label col-sm-3 col-sm-offset-2 lead"><strong>Nombre:</strong></label>
		<div class="col-sm-5">
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
</div>
<div class="form-group">
	<label for="email" class="control-label col-sm-3 col-sm-offset-2 lead"><strong>Correo:</strong></label>
	<div class="col-sm-5">
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa su correo electrónico'])!!}
	</div>
	
</div>
<div class="form-group">
	<label for="password" class="control-label col-sm-3 col-sm-offset-2 lead"><strong>Contraseña:</strong></label>
	<div class="col-sm-5">
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su contraseña'])!!}	
	</div>
</div>
<div class="form-group">
		<label for="type" class="control-label col-sm-3 col-sm-offset-2 lead"><strong>Tipo de Usuario:</strong></label>
		<div class="col-sm-5">
			<select id="typeuser" class="form-control inputmodify" name="type" type="type" style="max-width: 250px " >
                <option value="socio" default>Socio</option>
                <option value="gerente">Gerente</option>
				<option value="admin-g">administrador general</option>
				<option value="admin-p">administrador de pagos</option>
				<option value="admin-r">administrador de registros</option>
			</select>
		</div>	
</div>
