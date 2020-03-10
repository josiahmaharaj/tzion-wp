<?php get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="headerimg slide">
                <div class="carousel-inner">
                    <div class="headerimg-item active">
                        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>"
                            class="d-block w-100" alt="headerimage">
                        <div class="container">
                            <div class="carousel-caption text-center">
                                <h1><?php the_title(); ?></h1>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
      if (have_posts()) :
        /* Start the Loop */
        while (have_posts()) : the_post();
      ?>

                <div class="container">
                    <div class="py-4"></div>

                    <?php the_content(); ?>
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