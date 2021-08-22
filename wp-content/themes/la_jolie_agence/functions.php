<?php 
require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/func.php';

// Custom 
require get_template_directory() . '/inc/customs/custom-slider-banner.php';
require get_template_directory() . '/inc/customs/custom-galerie.php';
require get_template_directory() . '/inc/customs/custom-article.php';

// Admin 
require get_template_directory() . '/inc/admin/admin-contact.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/extra/template-tags.php';
require get_template_directory() . '/inc/extra/template-functions.php';

// Hide Admin Bar
add_filter( 'show_admin_bar', '__return_false' );