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
						<li class="nav-item"><a href="<?php echo esc_url(home_url('a-propos')); ?>" class="nav-link">À propos</a></li>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('prestation')); ?>" class="nav-link">Prestations</a></li>
						<li class="nav-item" id="gallery-link"><a href="<?php echo esc_url(home_url('portfolio')); ?>" class="nav-link">Portfolio</a></li>
						<li class="nav-item"><a href="<?php echo esc_url(home_url('contact')); ?>" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</nav>
		</header>

		