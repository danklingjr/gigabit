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
