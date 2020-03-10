<?php get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <h1>Archive</h1>
            <div class="py-4"></div>
            <div class="container">
            <?php
      if (have_posts()) :
        /* Start the Loop */
        while (have_posts()) : the_post();
      ?>
 
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_category(); ?></p>
                </a>
                <?php
        endwhile;
        /* End the Loop */
      else :
        // Nothing
      endif;
      ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>