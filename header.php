<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="navbar navbar-fixed-top navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#"><?php the_custom_logo(); ?></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="mybatton">HOME</a></li>
				<li><a href="#service" class="mybatton">SERVICE</a></li>
				<li><a href="#about" class="mybatton">ABOUT</a></li>
				<li><a href="#team" class="mybatton">TEAM</a></li>
				<li><a href="#pricing" class="mybatton">PRICING</a></li>
				<li><a href="#portfolio" class="mybatton">PORTFOLIO</a></li>
				<li><a href="#contact" class="mybatton">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="col-md-auto">
	<div class="page">
		<img src="/wp-content/img/maker-1.png" class="maker-1">
		<img src="/wp-content/img/maker-2.png" class="maker-2">
		<img src="/wp-content/img/maker-3.png" class="maker-3">
		<img src="/wp-content/img/maker-4.png" class="maker-4">
 		<div class="page-video">
    		<video class="video" loop="loop" autoplay="" muted="" poster="#">
      			<source src="wp-content/vidio/mountains.mp4" type="video/mp4">
    		</video>
  		</div>
	</div>
</div>