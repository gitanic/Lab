	<h1>Apoio</h1>
	<table>
		<tr>
			<th>Id</th>
			
			<th>logo</th>
			<th>link</th>
			<th>alt</th>
		</tr>
		<?php	foreach ($press_release as $object) { ?>
			<tr>
			<td><?php echo $object->id ?></td>
			
			<td><?php echo $object->logo ?></td>
			<td><?php echo $object->link ?></td>
			<td><?php echo $object->alt ?></td>
			<td><?php echo anchor('/press_release/edit/'.$object->id, 'Edit'); ?></td>
			<td><?php echo anchor('/press_release/destroy/'.$object->id, 'Destroy'); ?></td>
			
			</tr>
		<?php } ?>
	</table>
	
	<?php echo anchor('/press_release/create','Create'); ?>
