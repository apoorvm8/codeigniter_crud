<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create');?>
	<div class="form-group">
		<label for="email">Title</label>
		<input type="text" class="form-control" placeholder="Add Title" name="title" id="title">
	</div>
	<div class="form-group">
		<label for="editor1">Body</label>
		<textarea name="body" id="editor1" class="form-control" placeholder="Add Body"></textarea>
	</div>
	<div class="form-group">
		<label for="category">Category</label>
		<select name="category_id" id="catergory" class="form-control">
			<?php foreach($categories as $category): ?>
				<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label for="upload">Upload Image</label>
		<input type="file" id="upload" name="userfile" size="20">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>