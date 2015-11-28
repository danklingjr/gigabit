<?php

/************************************************************
 * Enque Custom Scripts
 ************************************************************/
add_action( 'wp_enqueue_scripts', 'site_name_enqueue_scripts', 99);
function site_name_enqueue_scripts(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-css', get_bloginfo('stylesheet_directory') . '/assets/dist/theme.min.css');

    wp_enqueue_script('theme-js', get_bloginfo('stylesheet_directory') . '/assets/dist/theme.min.js', array(), '1', true);
}
function load_fonts() {
    wp_register_style('et-fontsDotcom', 'http://fast.fonts.net/cssapi/375de3c3-5455-40be-95d3-b1a7748e4691.css');
    wp_enqueue_style( 'et-fontsDotcom');
}
add_action('wp_print_styles', 'load_fonts'); 