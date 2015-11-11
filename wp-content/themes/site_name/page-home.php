<?php

/**
* Template Name: Home Page
*
*/


// Set the page layout to full-width
add_filter( 'genesis_pre_get_option_site_layout', 'gsep_home_layout' );
    function gsep_home_layout( $opt ) {
    $opt = 'full-width-content'; // You can change this to any Genesis layout
    return $opt;
}

// Remove Genesis Base
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );



//SEM
add_action('genesis_entry_content', 'site_content');
function site_content()
{
    ?>
    <h1>YAY</h1>
    <?php
}
//SEM

genesis();