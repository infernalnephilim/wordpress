<?php get_header(); ?>


<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                    <div class="blog-post">
                        <h2 class="blog-post-title">
                            <?php the_title(); ?>
                        </h2>

                        <?php the_content(); ?>

                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('No page found'); ?></p>
            <?php endif; ?>
            </div><!-- /.blog-main -->
        </div>
    </div>
</section>

<section class="boxes">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h3>Header 1</h3>
                    <p>Początek traktatu czasu panowania Fryderyka Wielkiego, Króla Pruskiego żył w tej kary, winę przypisać? </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-gears" aria-hidden="true"></i>
                    <h3>Header 2</h3>
                    <p>Początek traktatu czasu panowania Fryderyka Wielkiego, Króla Pruskiego żył w tej kary, winę przypisać? </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <h3>Header 3</h3>
                    <p>Początek traktatu czasu panowania Fryderyka Wielkiego, Króla Pruskiego żył w tej kary, winę przypisać? </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>