	<h1>Users</h1>
	<table>
		<tr
			<th>Id</th>
			<th>Usuario</th>
		</tr>
		<?php	foreach ($users as $user) { ?>
			<tr>
			<td><?php echo $user->id ?></td>
			<td><?php echo $user->username ?></td>
			<td><?php echo anchor('/users/edit/'.$user->id, 'Edit'); ?></td>
			<td><?php echo anchor('/users/destroy/'.$user->id, 'Destroy'); ?></td>
			</tr>
		<?php } ?>
	</table>
	
	<?php echo anchor('/users/create','Create'); ?>
