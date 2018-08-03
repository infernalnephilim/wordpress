<?php

// Nav walker class
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
// Theme support
function wpb_theme_setup(){
 // nav menus

 register_nav_menus( array(
 	'primary' => __( 'Primary Menu', 'mytheme' ),
 ) );
}

add_action('after_setup_theme', 'wpb_theme_setup');