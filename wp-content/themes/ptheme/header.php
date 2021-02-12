<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header class="headroom headroom--top headroom--not-bottom">
		<nav class="navbar navbar-expand-lg">
			<div class="container"><a class="navbar-brand" href="#"> 
				<h1>
				<picture><img class="logo" src="../wp-content/uploads/2021/02/logo.png" alt=""></picture>
				</h1></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="fas fa-bars"></i></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php wp_nav_menu( array( 'theme_location' => 'my_main_menu','menu_class' => 'navbar-nav' ) ); ?>
			</div>
			</div>
		</nav>
		</header>