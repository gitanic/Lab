	<h1>Create</h1>
	<?php echo form_open('drinks/save'); ?>
		<input type="hidden" name="id" value="<?php echo isset($drinks)?$drinks->id:''?>"/>
		
		<p>
			<label for="title">title:</label><br/>
			<input type="text" name="title" value="<?php echo isset($drinks)?$drinks->title:''?>"/>
		</p>
		
		<p>
			<label for="body">body:</label><br/>
			<textarea name="body" cols="50" rows="10"><?php echo isset($drinks)?$drinks->body:''?></textarea>
		</p>
		
		<input type="submit" value="Create"/>
	</form>

