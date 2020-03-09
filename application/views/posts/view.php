<h2 class="mt-5"><?php echo $post['title']; ?></h2>
<div class="post-body">
	<small class="post-date">Posted On: <?php echo $post['created_at'];?></small><br>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
	<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>" alt="" class="img-fluid">
</div>
</div>
</div>
	<div class="post-body">
		<?php echo $post['body'];?>
	</div>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id']) :?>
<hr>
<div class="container">
	<div class="row">
		<a class="btn btn-warning text-white mx-4 px-4 pb-1" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'];?>">Edit</a>

		<?php echo form_open('/posts/delete/'.$post['id']); ?>
			<input type="submit" value="Delete" class="btn btn-danger pt-1 pb-1">
		</form>
	</div>
</div>
<?php endif;?>
<hr>
<h3>Comments</h3>
<?php if($comments) : ?>
	<?php foreach($comments as $comment) :?>
		<div class="card bg-light mt-2">
			<div class="card-body px-2 pt-2 pb-1">
		<p><?php echo $comment['body']; ?>[by <strong><?php echo $comment['name']; ?>]</strong></p>
	</div>
	</div>
	<?php endforeach; ?>
<?php else : ?>
	<div class="card">
		<div class="card-body">
			<p>No Comments to Display</p>
		</div>
	</div>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/' . $post['id']); ?>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea name="body" id="body" class="form-control">
			
		</textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button type="submit" class="btn btn-primary">Submit</button>
</form>