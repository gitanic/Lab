	<h1>Sobre</h1>
	<table>
		<tr>
			<th>Id</th>
			
			<th>title</th>
			<th>body</th>
		</tr>
		<?php	foreach ($about as $object) { ?>
			<tr>
			<td><?php echo $object->id ?></td>
			
			<td><?php echo $object->title ?></td>
			<td><?php echo $object->body ?></td>
			<td><?php echo anchor('/about/edit/'.$object->id, 'Edit'); ?></td>
			<td><?php echo anchor('/about/destroy/'.$object->id, 'Destroy'); ?></td>
			
			</tr>
		<?php } ?>
	</table>
	
	<?php echo anchor('/about/create','Create'); ?>
