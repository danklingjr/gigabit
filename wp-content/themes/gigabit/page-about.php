<?php

/**
* Template Name: About Us
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
	</div>
	<div class="page__text">
		<h2>Ut vitae erat vitae lorem sagittis rutrum.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus tincidunt massa, eget venenatis dui sagittis sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sem ipsum, porttitor non augue nec, eleifend faucibus risus. Donec sed auctor erat, in volutpat tellus. Integer laoreet consequat dolor ut facilisis. Nam turpis felis, laoreet tincidunt feugiat nec, pretium in risus.</p>
		<p>Integer tincidunt dolor eget rhoncus vehicula. Pellentesque viverra, turpis quis sodales fringilla, tellus urna malesuada ante, a ullamcorper mauris neque nec velit. Aenean ut massa lectus. In nisl turpis, tempor sit amet lectus sit amet, commodo lacinia tellus.  Aenean ut massa lectus. In nisl turpis, tempor sit amet lectus sit amet, commodo lacinia tellus.</p>
	</div>
</section>

<?php
}
//SEM

genesis();