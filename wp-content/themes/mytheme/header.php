<?php
/**
 * Created by PhpStorm.
 * User: Demonia
 * Date: 01.08.2018
 * Time: 13:54
 */
?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>
<body>
<div class="blog-head">
    <div class="container">
            <nav class="blog-nav">
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav mr-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
            </nav>
    </div>
</div>

<section class="showcase">
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
        <a class="btn btn-primary btn-lg">Read More</a>
    </div>
</section>