	<h1>Create</h1>
	<?php echo form_open('about/save'); ?>
		<input type="hidden" name="id" value="<?php echo isset($about)?$about->id:''?>"/>
		
		<p>
			<label for="title">title:</label><br/>
			<input type="text" name="title" value="<?php echo isset($about)?$about->title:''?>"/>
		</p>
		
		<p>
			<label for="body">body:</label><br/>
			<textarea name="body" cols="50" rows="10"><?php echo isset($about)?$about->body:''?></textarea>
		</p>
		
		<input type="submit" value="Create"/>
	</form>

