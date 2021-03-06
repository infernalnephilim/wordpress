<?php
/**
 * Created by PhpStorm.
 * User: Demonia
 * Date: 01.08.2018
 * Time: 13:54
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/style.css">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo rand(111,999)?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-topbar">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
    &#9776;
  </button>
  <div class="collapse navbar-collapse" id="collapsingNavbar">
    <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
    <?php
        wp_nav_menu( array(
          'theme_location' => 'navbar',
          'container'      => false,
          'menu_class'     => 'nav navbar-nav',
          'fallback_cb'    => '__return_false',
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'          => 2,
          'walker'         => new bootstrap_4_walker_nav_menu()
       ) );
    ?>
    <?php get_template_part('navbar-search'); ?>
  </div>
</nav>

<section class="showcase">
    <div class="container">
        <div class="site-header">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
            <img id="header-img" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"/>

            <!--<a class="btn btn-primary btn-lg">Read More</a>-->
        </div>
    </div>
</section>