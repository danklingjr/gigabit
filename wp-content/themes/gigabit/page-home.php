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

<section class="section--black intro--home">
	<h2>Ut vitae erat vitae lorem sagittis rutrum. Aliquam id egestas ante ipsum.</h2>
	<p>Aliquam id lorem a nisl elementum maximus nec at augue. Vivamus ultricies urna purus, fermentum interdum metus pretium at. Integer scelerisque cursus semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us" class="button">More About Us <span>></span></a>
</section>

<section class="community--lineup">
	<h3>Our Community Lineup Includes:</h3>
	<div class="community community--home community--york">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/york-text.svg" alt="">
	</div>
	<div class="community community--home community--hanover">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hanover-text.svg" alt="">
	</div>
	<div class="community community--home community--pottstown">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pottstown-text.svg" alt="">
	</div>
	<div class="community community--home community--ephrata">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ephrata-text.svg" alt="">
	</div>
	<div class="community community--home community--doylestown">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doylestown-text.svg" alt="">
	</div>
	<div class="community community--home community--reading">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/" alt="">
	</div>
</section>

<section class="section--black">
	<h2>Ut vitae erat vitae lorem sagittis rutrum. Aliquam id egestas ante ipsum.</h2>
	
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>faqs" class="button">Visit Our FAQs <span>></span></a>
</section>

<?php
}
//SEM

genesis();