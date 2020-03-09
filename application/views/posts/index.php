<h2 class="mt-2 my-3"><?= $title; ?></h2>
<?php foreach ($posts as $post) : ?>
<h3><?php echo $post['title']; ?></h3>
<div class="row">
	<div class="col-md-3">
		<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>" alt="" class="post-thumb img-fluid">
	</div>
	<div class="col-md-9">
		<small class="post-date">Posted On: <?php echo $post['created_at'];?> in <strong><?php echo $post['name']; ?></strong></small><br>
		<?php echo word_limiter($post['body'], 60);?>
		<div class="mb-3"></div>
		<p><a class="btn btn-secondary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
	</div>
</div>
<?php endforeach; ?>
<div class="pagination-links">
<?php  echo $this->pagination->create_links(); ?>
</div>	