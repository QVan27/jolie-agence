<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package la_jolie_agence
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?= get_template_directory_uri() . '/asset/img/favicons-lja.png'?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="locomotive-container" data-scroll-container>
	<div id="wrap">

		<!-- header -->
		<header id="header">
			<a href="<?= esc_url(home_url('/')); ?>" class="nav-brand"><img src="<?= get_template_directory_uri() . '/asset/img/logo-home.png'?>" alt=" Logo" class="nav-logo"></a>
			<nav class="navbar">
				<div class="container">
					<ul class="nav">
						<li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link">Accueil</a></li>
						<!-- <i class="fas fa-heart pink-heart"></i> -->
						<li class="nav-item"><a href="<?php echo esc_url(home_url('a-propos')); ?>" class="nav-link">À propos</a></li>
						<!-- <i class="fas fa-heart pink-heart"></i> -->
						<li class="nav-item"><a href="<?php echo esc_url(home_url('prestation')); ?>" class="nav-link">Prestations</a></li>
						<!-- <i class="fas fa-heart pink-heart"></i> -->
						<li class="nav-item" id="gallery-link"><a href="<?php echo esc_url(home_url('galeries')); ?>" class="nav-link">Portfolio</a></li>
						<!-- <i class="fas fa-heart pink-heart"></i> -->
						<li class="nav-item"><a href="<?php echo esc_url(home_url('contact')); ?>" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</nav>
		</header>

			<!-- <nav class="navbar-link">
				<div class="container">
					<a href="" class="nav-brand"><img src="" alt=" Logo" class="nav-logo"></a>
					<ul class="nav">
						<li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link">Accueil</a></li>
						<i class="fas fa-heart pink-heart"></i>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('a-propos')); ?>" class="nav-link">À propos</a></li>
						<i class="fas fa-heart pink-heart"></i>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('prestation')); ?>" class="nav-link">Prestation</a></li>
						<i class="fas fa-heart pink-heart"></i>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('gallerie')); ?>" class="nav-link" id="gallery">Gallerie</a></li>
						<i class="fas fa-heart pink-heart"></i>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('contact')); ?>" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</nav> -->

			<!-- <nav id="navbar-js">
				<div class="container">
				<a href="<?= esc_url(home_url('/')); ?>" class="nav-brand"><img src="<?= get_template_directory_uri() . '/asset/img/logo-dark.png'?>" alt=" Logo" class="nav-logo"></a>
					<ul class="nav">
						<li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link">Accueil</a></li>
						<i class="fas fa-heart pink-heart"></i>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('a-propos')); ?>" class="nav-link">À propos</a></li>
						<i class="fas fa-heart pink-heart"></i>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('prestation')); ?>" class="nav-link">Prestation</a></li>
						<i class="fas fa-heart pink-heart"></i>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('gallerie')); ?>" class="nav-link">Gallerie</a></li>
						<i class="fas fa-heart pink-heart"></i>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('contact')); ?>" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</nav> -->