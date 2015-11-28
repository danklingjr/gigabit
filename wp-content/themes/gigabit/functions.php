<?php

// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Layout
require_once(CHILD_DIR.'/lib/layout.php');

// Template
include_once(CHILD_DIR.'/lib/template.php');

// Admin
//include_once(CHILD_DIR.'/lib/admin.php');

//error log
function elog($x){
    ob_start();
    print_r($x);
    $contents = ob_get_contents();
    ob_end_clean();
    error_log($contents);
}

function register_my_menu() {
  register_nav_menu( 'nav_main', __( 'Nav Main', 'theme-slug' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

function gigabit_setup() {
  add_image_size( 'service-home', 500, 440, array( 'center', 'center' ) );
}
add_action( 'after_setup_theme', 'gigabit_setup' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

if(function_exists('acf_add_options_page')) {
  acf_add_options_page();
}
