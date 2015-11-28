<?php
//Remove Header Information
// remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action( 'genesis_header', 'genesis_do_header' );



//Primary Header
add_action( 'genesis_header', 'gigabit_do_header' );
function gigabit_do_header()
{
?>

<div class="header--overlay">
    
</div>
<nav role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
    <?php wp_nav_menu( array( 'theme_location' => 'nav_main' ) ); ?>
</nav>

<div class="branding">
    <?php if (is_front_page()){ ?>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gigabit-logo.svg" alt="">
    <a href="" class="button">Watch Full Video <span>></span></a>
    <?php } else { ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gigabit-eagle.svg" alt=""></a>
    <?php } ?>
</div>
    <?php if (!is_front_page()){ ?>
    <h1 class="page__title"><?php the_title(); ?></h1>
    <?php } ?>

<?php
}

add_action('genesis_after_header', 'gigabit_mobile_nav');
function gigabit_mobile_nav()
{
?>



<?php
}