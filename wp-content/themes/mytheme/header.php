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
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>
<body>
<div class="blog-head">
    <div class="container">
            <nav class="blog-nav nav">
                <a class="blog-nav-item nav-link active" href="#">Home</a>
                <a class="blog-nav-item nav-link" href="#">New features</a>
                <a class="blog-nav-item nav-link" href="#">Press</a>
                <a class="blog-nav-item nav-link" href="#">New hires</a>
                <a class="blog-nav-item nav-link" href="#">About</a>
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