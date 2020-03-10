<?php

/**
 * Enqueue scripts and styles
 */
function tzion_enqueue_scripts() {
    // all styles
    // wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), 20141119 );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/theme.css',false,'1.0','all' );
    wp_enqueue_style( 'carousel-style', get_stylesheet_directory_uri() . '/css/carousel.css', '1.0','all' );
    wp_enqueue_style( 'editor-style-block', get_stylesheet_directory_uri() . '/css/editor-style-block.css', '1.0','all' );
    wp_enqueue_style( 'editor-style-block-rtl', get_stylesheet_directory_uri() . '/css/editor-style-block-rtl.css', '1.0','all' );
    wp_enqueue_style( 'editor-style-classic', get_stylesheet_directory_uri() . '/css/editor-style-classic.css', '1.0','all' );
    wp_enqueue_style( 'editor-style-classic-rtl', get_stylesheet_directory_uri() . '/css/editor-style-classic-rtl.css', '1.0','all' );
    // all scripts
    // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
    // wp_enqueue_script( 'theme-script', get_template_directory_uri() . './js/scripts.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'tzion_enqueue_scripts' );
add_theme_support( 'post-thumbnails' );

require get_template_directory() . '/bootstrap-navwalker.php';

register_nav_menus( array(
    'mainmenu' => esc_html__( 'Primary', 'tzion-textdomain' ),
) );