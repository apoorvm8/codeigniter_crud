<h2 class="mt-5"><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control" id="name" placeholder="Enter Category">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>