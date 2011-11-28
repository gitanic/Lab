	<table>
		<trh>
			<td>Id</td>
			<td>Usuario</td>
		</tr>
		<?php	foreach ($users as $user) { ?>
			<tr>
			<td><?php echo $user->id ?></td>
			<td><?php echo $user->username ?></td>
			</tr>
		<?php } ?>
	</table>
