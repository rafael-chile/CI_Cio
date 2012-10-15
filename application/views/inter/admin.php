<html>
<head>

</head>
<body>

    Hola <?=$nombre; ?> , usted es Admin.

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Groups</th>
		<th>Status</th>
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
			<td><?php echo ($user->active) ? anchor("inter/deactivate/".$user->id, 'Active') : anchor("inter/activate/". $user->id, 'Inactive');?></td>
		</tr>
	<?php endforeach;?>
</table>


</body>
</html>