<?php

// Footer
remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'genesis_before_footer', 'gigabit_be_footer' );
function gigabit_be_footer() {
?>

<section class="section--blue footer--inner group">
	<div class="footer--about">
		<h2>Ut vitae erat vitae lorem sagittis rutrum.</h2>
		<p>Aliquam id lorem a nisl elementum maximus nec at augue. Vivamus ultricies urna purus, fermentum interdum metus pretium at. Integer scelerisque cursus semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us" class="button">Contact Us Today <span>></span></a>
	</div>
	<div class="footer--branding">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gigabit-flat.svg" alt="">
	</div>
</section>

<?php
}

add_action( 'genesis_footer', 'gigabit_do_footer' );
function gigabit_do_footer() {
?>

<div class="copyright-wrap group">
	<p class="copyright">&copy; GIG REV York, PA USA - Registered in the United States of America.</p>
	<p class="links"><a href="">Terms &amp; Conditions</a> <a href="">Privacy Policy</a></p>
</div>

<?php
}