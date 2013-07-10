<?php

/** DO NOT OVERWRITE YOUR CHILD THEME FUNCTIONS.PHP WITH THIS FILE
	Simply place the snippet below in your existing functions.php, name your nav "Main Nav" and it will call the mobile menu **/

/** Mobile Menu **/
add_action( 'init', 'genesis_mobile_menu', 9999 );

function genesis_mobile_menu() {
	if ( ! class_exists( 'mobile_menu' ) )
		 require_once( CHILD_DIR . '/lib/mobile-menu/init.php' );
}