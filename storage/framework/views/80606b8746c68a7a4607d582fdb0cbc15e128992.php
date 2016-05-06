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