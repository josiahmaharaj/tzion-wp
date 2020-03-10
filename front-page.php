<?php get_header(); ?>

<!-- <div class="wrap">
  <div id="primary" class="content-area"> -->
<main id="main" class="site-main" role="main">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php if( get_field('image1') ): ?>
            <li data-target="#myCarousel" data-slide-to="0" class=" active carousel-indicator"></li>
            <?php endif; ?>
            <?php if( get_field('image2') ): ?>
            <li data-target="#myCarousel" data-slide-to="1" class="carousel-indicator"></li>
            <?php endif; ?>
            <?php if( get_field('image3') ): ?>
            <li data-target="#myCarousel" data-slide-to="2" class="carousel-indicator"></li>
            <?php endif; ?>
            <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner">
            <?php if( get_field('image1') ): ?>
            <div class="carousel-item active">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img src="<?php the_field('image1'); ?>" class="d-block w-100 tzion-carousel-image" alt="carousel1">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1><?php the_field('headline1'); ?></h1>
                        <p><?php the_field('description1'); ?></p>
                        <?php if( get_field('button1') ): ?>
                        <p><a class="btn btn-lg btn-primary" href="<?php the_field('button1'); ?>" role="button"><?php the_field('buttontext1'); ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('image2') ): ?>
            <div class="carousel-item">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img src="<?php the_field('image2'); ?>" class="d-block w-100" alt="carousel1">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1><?php the_field('headline2'); ?></h1>
                        <p><?php the_field('description2'); ?></p>
                        <?php if( get_field('button2') ): ?>
                        <p><a class="btn btn-lg btn-primary" href="<?php the_field('button2'); ?>" role="button"><?php the_field('buttontext2'); ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('image3') ): ?>
            <div class="carousel-item">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                <img src="<?php the_field('image3'); ?>" class="d-block w-100" alt="carousel1">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1><?php the_field('headline3'); ?></h1>
                        <p><?php the_field('description3'); ?></p>
                        <?php if( get_field('button3') ): ?>
                        <p><a class="btn btn-lg btn-primary" href="<?php the_field('button3'); ?>" role="button"><?php the_field('buttontext3'); ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">

        <?php
      if (have_posts()) :
        /* Start the Loop */
        while (have_posts()) : the_post();
      ?>

        <div>
            <h3><?php the_title(); ?></h3>
        </div>
        <p><?php the_content(); ?></p>

        <?php
        endwhile;
        /* End the Loop */
      else :
        // Nothing
      endif;
      ?>

    </div>


</main><!-- #main -->

<?php get_footer(); ?>