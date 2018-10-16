<?php


require_once get_template_directory() . '/bootstrap-4-nav-walker.php';
// Theme support
function wpb_theme_setup(){

	load_theme_textdomain( 'mytheme' );
	add_theme_support( 'automatic-feed-links' );
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array(
    		'comment-form',
    		'comment-list',
    		'gallery',
    		'caption',
    	) );
    add_theme_support( 'post-formats', array(
    		'aside',
    		'image',
    		'video',
    		'quote',
    		'link',
    		'gallery',
    		'audio',
    	) );
    add_theme_support( 'customize-selective-refresh-widgets' );

    $args = array(
        'flex-width'    => true,
        'width'         => 1920,
        'flex-height'    => true,
        'height'        => 200,
        'default-image' => get_template_directory_uri() . '/images/header.jpg',
    );
    add_theme_support( 'custom-header', $args );

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



function mytheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'twentyseventeen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
//
//if ( function_exists ('register_sidebar')) {
//    register_sidebar ('sidebar-1');
//}

function twentyseventeen_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'twentyseventeen_header_image_tag', 10, 3 );