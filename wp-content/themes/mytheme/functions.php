<?php


require_once get_template_directory() . '/bootstrap-4-nav-walker.php';
// Theme support
function wpb_theme_setup(){

add_theme_support('post-thumbnails');
 // nav menus

 register_nav_menus( array(
 	//'primary' => __( 'Primary Menu', 'mytheme' ),
 	'navbar' => __('Navbar', 'mytheme')
 ) );
}

add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt Length Control
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );