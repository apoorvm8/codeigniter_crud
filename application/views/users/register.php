<?php echo validation_errors(); ?>

<?php echo form_open(); ?>
<div class="row justify-content-center">
	<div class="col-md-4">
		<h1 class="mt-5 text-center"><?= $title; ?></h2>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" placeholder="Name">
	</div>
	<div class="form-group">
		<label for="zipcode">Zipcode</label>
		<input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="username">Username</label>
		<input type="username" class="form-control" name="username" placeholder="Username">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label for="password2">Confirm Password</label>
		<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Register</button>
</div>
</div>
<?php echo form_close();?>