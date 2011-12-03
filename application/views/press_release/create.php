	<h1>Create</h1>
	<?php echo form_open('press_release/save'); ?>
		<input type="hidden" name="id" value="<?php echo isset($press_release)?$press_release->id:''?>"/>
		
		<p>
			<label for="logo">logo:</label><br/>
			<input type="text" name="logo" value="<?php echo isset($press_release)?$press_release->logo:''?>"/>
		</p>
		
		<p>
			<label for="link">link:</label><br/>
			<input type="text" name="link" value="<?php echo isset($press_release)?$press_release->link:''?>"/>
		</p>
		
		<p>
			<label for="alt">alt:</label><br/>
			<input type="text" name="alt" value="<?php echo isset($press_release)?$press_release->alt:''?>"/>
		</p>
		
		<input type="submit" value="Create"/>
	</form>

