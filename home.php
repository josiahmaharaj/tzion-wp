<?php get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="headerimg slide">
                <div class="carousel-inner">
                    <div class="headerimg-item active">
                        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/texture.jpg' ; ?>"
                            class="d-block w-100" alt="headerimage">
                        <div class="container">
                            <div class="carousel-caption text-center">
                                <h1>News</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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