<h1>Usuarios</h1>
<p>Lista de todos los usuarios.</p>

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Correo</th>
		<th>Grupos</th>
		<th>Estado del usuario</th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo $group->name;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("inter/deactivate/".$user->id, 'Activo') : anchor("inter/activate/". $user->id, 'Inactivo');?></td>
		</tr>
	<?php endforeach;?>
</table>

<p><a href="<?php echo site_url('inter/create_user');?>">Crear nuevo usuario.</a></p>