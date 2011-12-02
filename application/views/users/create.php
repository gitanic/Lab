	<h1>Create</h1>
	<?php echo form_open('users/save'); ?>
		<input type="hidden" name="id" value="<?php echo isset($users)?$users->id:''?>"/>
		<p>
			<label for="username">User:</label><br/>
			<input type="text" name="username" value="<?php echo isset($users)?$users->username:''?>"/>
		</p>
		<p>
			<label for="password">Password:</label><br/>
			<input type="password" name="password"  value="<?php echo isset($users)?$users->password:''?>"/>
		</p>
		<input type="submit" value="Create"/>
	</form>

