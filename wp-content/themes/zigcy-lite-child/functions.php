<?php


// add parent style, minified css
add_action( 'get_footer', 'prefix_add_footer_styles' );
function prefix_add_footer_styles() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri().'/assets/css/custom.css');
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), time(), true, true );
}


