<?php

/**
* Template Name: FAQs
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

<section class="section--content faqs group">
	<div>
		<h2>Question Number One</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus tincidunt massa, eget venenatis dui sagittis sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sem ipsum, porttitor non augue nec, eleifend faucibus risus.</p>
	</div>
	<div>
		<h2>Question Number One</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus tincidunt massa, eget venenatis dui sagittis sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sem ipsum, porttitor non augue nec, eleifend faucibus risus.</p>
	</div>
	<div>
		<h2>Question Number One</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus tincidunt massa, eget venenatis dui sagittis sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sem ipsum, porttitor non augue nec, eleifend faucibus risus.</p>
	</div>
	<div>
		<h2>Question Number One</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus tincidunt massa, eget venenatis dui sagittis sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sem ipsum, porttitor non augue nec, eleifend faucibus risus.</p>
	</div>
	<div>
		<h2>Question Number One</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus tincidunt massa, eget venenatis dui sagittis sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sem ipsum, porttitor non augue nec, eleifend faucibus risus.</p>
	</div>
	<div>
		<h2>Question Number One</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus tincidunt massa, eget venenatis dui sagittis sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sem ipsum, porttitor non augue nec, eleifend faucibus risus.</p>
	</div>
	<div>
		<h2>Question Number One</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus tincidunt massa, eget venenatis dui sagittis sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sem ipsum, porttitor non augue nec, eleifend faucibus risus.</p>
	</div>
	<div>
		<h2>Question Number One</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus tincidunt massa, eget venenatis dui sagittis sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sem ipsum, porttitor non augue nec, eleifend faucibus risus.</p>
	</div>
</section>

<?php
}
//SEM

genesis();