	<h1>Usuarios</h1>
	<table>
		<tr>
			<th>Id</th>
			
			<th>username</th>
			<th>password</th>
		</tr>
		<?php	foreach ($users as $object) { ?>
			<tr>
			<td><?php echo $object->id ?></td>
			
			<td><?php echo $object->username ?></td>
			<td><?php echo $object->password ?></td>
			<td><?php echo anchor('/users/edit/'.$object->id, 'Edit'); ?></td>
			<td><?php echo anchor('/users/destroy/'.$object->id, 'Destroy'); ?></td>
			
			</tr>
		<?php } ?>
	</table>
	
	<?php echo anchor('/users/create','Create'); ?>
