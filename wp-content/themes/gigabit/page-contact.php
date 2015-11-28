<?php

/**
* Template Name: Contact Us
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

<section class="section--content about group">
	<div class="page__branding">
		<div class="about__logo--wrap">
			<div>
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gigabit-about-05.svg" alt="">
			</div>
		</div>
		<h2>Our Campus</h2>
		<p>1209 Redwood Drive<br>Elmhurst, NY 11373</p>
		<p>000 . 000 . 0000<br>contact@gigrev.com</p>
	</div>
	<div class="page__text">
		<h2>Ut vitae erat vitae lorem sagittis rutrum.</h2>
		<form action="" method="">
			<div class="group">
				<input type="text" placeholder="Name">
				<input type="text" placeholder="Business Name (optional)">
			</div>
			<div class="group">
				<input type="text" placeholder="(000) 000-0000">
				<input type="text" placeholder="Email">
			</div>
			<div class="group">
				<input type="text" placeholder="Zipcode">
				<input type="text" placeholder="I am contacting Gig Rev for:">
			</div>
			<div>
				<textarea>Message</textarea>
			</div>
			<button class="button button--dark">Submit <span>></span></button>
		</form>
	</div>
</section>

<?php
}
//SEM

genesis();