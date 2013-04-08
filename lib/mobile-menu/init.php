<?php
 
/** Create Mobile Nav */

add_action('genesis_before_header', 'do_toggle_button', 14);
function do_toggle_button() { ?>
	<div id="mobile-nav-wrapper"><button class="nav-button">Toggle Navigation</button><div class="mobile-label">Navigation</div>
  <?php
}

add_action( 'genesis_before_header', 'custom_mobile_nav', 15);
function custom_mobile_nav() {
wp_nav_menu(array(
'menu' => 'Main Nav',
'container' => '',
'menu_class' => 'mobile-nav',
'menu_id' => 'mobile-nav'
));
}

add_action('genesis_before_header', 'do_menu_wrapper_close', 16);
function do_menu_wrapper_close() { ?>
	</div>
<?php
}

// End //




