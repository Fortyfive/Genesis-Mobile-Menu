<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 
add_action( 'wp_enqueue_scripts', 'prefix_enqueue_mobile_js' );
	if ( ! function_exists( 'prefix_enqueue_mobile_js' ) ) {
		function prefix_enqueue_mobile_js() {
			wp_enqueue_script( 'prefix-general', get_stylesheet_directory_uri() . '/lib/mobile-menu/js/general.js', array( 'jquery' ), '1.0.0' );
	}
}

add_action( 'wp_enqueue_scripts', 'mobile_menu_styles', 200 );
function mobile_menu_styles() {
global $wp_styles;
wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/lib/mobile-menu/style.css', array(), '1.0' );
}

/** Create Mobile Nav */

add_action('genesis_before', 'do_toggle_button', 14);
function do_toggle_button() {
	echo '<div id="mobile-nav-wrapper"><a class="menu-toggle" href="#">Toggle Navigation</a><div class="mobile-label">Menu</div>';
	wp_nav_menu(array(
	  'menu' => 'Main Nav',
	  'container' => '',
	  'menu_class' => 'mobile-nav',
	  'menu_id' => 'mobile-nav'
	));
echo '</div>';
}

// End. That's it, folks! //




