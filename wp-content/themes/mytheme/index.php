<?php get_header(); ?>


<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('There are no posts yet'); ?></p>
            <?php endif; ?>
            </div><!-- /.blog-main -->
            <div class="col-sm-4 sidebar">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
        </div>
    </div>
</section>

<section class="boxes">
    <div class="container">
    <?php get_template_part( 'info' );?>
    </div>
</section>

<?php get_footer(); ?>