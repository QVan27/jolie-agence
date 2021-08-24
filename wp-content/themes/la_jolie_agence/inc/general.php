<?php

/**
 * la_jolie_agence functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package la_jolie_agence
 */

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('la_jolie_agence_setup')) :
	function la_jolie_agence_setup()
	{
		load_theme_textdomain('la_jolie_agence', get_template_directory() . '/languages');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'la_jolie_agence'),
			)
		);
		add_theme_support('customize-selective-refresh-widgets');
	}
endif;
add_action('after_setup_theme', 'la_jolie_agence_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function la_jolie_agence_content_width()
{
	$GLOBALS['content_width'] = apply_filters('la_jolie_agence_content_width', 640);
}
add_action('after_setup_theme', 'la_jolie_agence_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function la_jolie_agence_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'la_jolie_agence'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'la_jolie_agence'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'la_jolie_agence_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function la_jolie_agence_scripts()
{

	// CSS
	wp_enqueue_style('la_jolie_agence-style', get_stylesheet_uri(), array(), _S_VERSION);
	// Animate .css
	// wp_enqueue_style('animate.css', get_template_directory_uri() . '/asset/css/animate.css', array(), _S_VERSION);
	// Flexslider .css
	wp_enqueue_style('flexslider.css', get_template_directory_uri() . '/asset/css/flexslider.css', array(), _S_VERSION);
	// LightBox .css
	wp_enqueue_style('lightBox.css', get_template_directory_uri() . '/asset/css/lightbox.min.css', array(), _S_VERSION);
	// FontAwesome
	wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css' );
	wp_enqueue_style('Font_Awesome');
	// Locomotive Scroll .css
	wp_register_style( 'cookie.css', 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css' );
	wp_enqueue_style('cookie.css');
	

	// jQuery
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/asset/js/jquery-1.9.1.min.js', array(), '1.9.1', true);
	// Cookie
	wp_deregister_script('cookie');
	wp_enqueue_script('cookie', 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js', array(), '1.9.1', true);
	// Plugins
	// Flexslider .js
	wp_enqueue_script('flexSliderJs', get_template_directory_uri() . '/asset/js/flexslider-min.js', array(), '1.0.2', true);
	// LightBox .js
	wp_enqueue_script('lightBox', get_template_directory_uri() . '/asset/js/lightbox.min.js', array(), '1.0.2', true);
	// JS
	wp_enqueue_script('la_jolie_agence_js', get_template_directory_uri() . '/asset/js/main.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'la_jolie_agence_scripts');
