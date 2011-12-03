<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Lab:Admin</title>
		<style>
			body {font-family:Arial} 
			ul {list-style-type: none;margin: auto;}
			li {float: left;padding:10px;}
			.clear {clear:both}
		</style>
	</head>
	<body>
	<h1>Admin</h1>
	<h2>Olá!</h2>
	
	<ul>
		<li><?php echo anchor('/press_release', 'Apoio'); ?></li>
		<li><?php echo anchor('/about', 'O Clube'); ?></li>
		<li><?php echo anchor('/drinks', 'Drinks'); ?></li>
		<li><?php echo anchor('/users', 'Usuarios'); ?></li>
		<li><?php echo anchor('admin/logout', 'Logout'); ?></li>
	</ul>	
	<div class="clear"></div>
