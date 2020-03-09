<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ciBlog</title>
    <!--        Favicon -->
    <!--    Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Font Awesome   -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">


</head> 

<body>
    <nav class="navbar navbar-expand-md bg-success">
    	<div class="container">
            <a href="<?php echo base_url();?>" class="navbar-brand text-white">ciBlog</a>
            <div id="navbar" class="mr-auto">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?php echo base_url();?>" class="nav-link text-light text-uppercase">Home</a></li>
                <li class="nav-item"><a href="<?php echo base_url();?>about" class="nav-link text-light text-uppercase">About</a></li>     
                <li class="nav-item"><a href="<?php echo base_url();?>posts" class="nav-link text-light text-uppercase">Blog</a></li>  
                <li class="nav-item"><a href="<?php echo base_url();?>categories" class="nav-link text-light text-uppercase">Categories</a></li>     
        	</ul>
        	</div>
             <ul class="navbar-nav">
                <?php if(!$this->session->userdata('logged_in')) : ?>
                    <li class="nav-item"><a href="<?php echo base_url();?>users/login" class="nav-link text-light text-uppercase">Login</a></li> 
                    <li class="nav-item"><a href="<?php echo base_url();?>users/register" class="nav-link text-light text-uppercase">Register</a></li>  
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in')) :?>
                <li class="nav-item"><a href="<?php echo base_url();?>posts/create" class="nav-link text-light text-uppercase">Create Post</a></li>  
                <li class="nav-item"><a href="<?php echo base_url();?>categories/create" class="nav-link text-light text-uppercase">Create Category</a></li> 
                <li class="nav-item"><a href="<?php echo base_url();?>users/logout" class="nav-link text-light text-uppercase">Logout</a></li> 
                <?php endif;?>
            </ul> 
        </div>
    </nav>
    <div class="container">
        <!-- Flash Messages -->
        <?php if($this->session->flashdata('user_registered')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>  
        <?php if($this->session->flashdata('post_created')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
        <?php endif; ?>  
        <?php if($this->session->flashdata('post_updated')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
        <?php endif; ?>   
        <?php if($this->session->flashdata('category_created')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
        <?php endif; ?> 
        <?php if($this->session->flashdata('post_deleted')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')) : ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
        <?php endif; ?> 
        <?php if($this->session->flashdata('user_loggedin')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('user_loggedout')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('category_deleted')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
        <?php endif; ?>
    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!--Bootstrap Jquery-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <!--Custom JS-->
    <!-- <script src="js/script.js"></script> -->
