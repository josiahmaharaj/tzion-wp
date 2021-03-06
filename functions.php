<?php

/**
 * Enqueue scripts and styles
 */
function your_theme_enqueue_scripts() {
    // all styles
    // wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), 20141119 );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/theme.css',false,'1.0','all' );
    wp_enqueue_style( 'carousel-style', get_stylesheet_directory_uri() . '/css/carousel.css', '1.0','all' );
    // all scripts
    // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . './js/scripts.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );
