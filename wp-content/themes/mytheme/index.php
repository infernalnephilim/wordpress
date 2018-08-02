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

    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h1>Wordpress Theme</h1>
        <p>Lorem ipsum</p>
        <a class="btn btn-primary btn-lg">Read More</a>
    </div>
</section>

<section class="boxes">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Początek traktatu czasu panowania Fryderyka Wielkiego, Króla Pruskiego żył w tej kary, winę przypisać? </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-gears" aria-hidden="true"></i>
                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Początek traktatu czasu panowania Fryderyka Wielkiego, Króla Pruskiego żył w tej kary, winę przypisać? </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Początek traktatu czasu panowania Fryderyka Wielkiego, Króla Pruskiego żył w tej kary, winę przypisać? </p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="blog-footer">
<p>
    Blog template built for wordpress
</p>
    <p>
        <a href="">Back to top</a>
    </p>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
