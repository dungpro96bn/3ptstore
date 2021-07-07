<?php


// add parent style, minified css
add_action( 'get_footer', 'prefix_add_footer_styles' );
function prefix_add_footer_styles() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri().'/assets/css/custom.css');
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), time(), true, true );

}

function ws_scripts_and_styles() {
    wp_enqueue_style('chosen-style', get_stylesheet_directory_uri() .'/assets/css/chosen.min.css');
    wp_enqueue_style( 'fontawsome-style', get_stylesheet_directory_uri() . "/assets/font-awesome-4.7.0/css/font-awesome.min.css", array(),time() );
    wp_enqueue_script( 'chosen-js', get_stylesheet_directory_uri() . '/assets/js/chosen.jquery.min.js', array(), time() );
    wp_enqueue_script( 'chosen-proto-js', get_stylesheet_directory_uri() . '/assets/js/chosen.proto.min.js', array(), time() );

}
add_action( 'wp_enqueue_scripts', 'ws_scripts_and_styles' );
