Genesis-Mobile-Menu
===================

Mobile menu widget for Genesis Framework. It is imperative that you have jQuery included in your core WP or theme files.

1) Place this lib folder in your Genesis child theme if you don't already have one.

2) Place the following code in your functions file:

<code> 
/** Custom Widgets **/ 
add_action( 'init', 'genesis_mobile_menu', 9999 ); 
function genesis_mobile_menu() { 
  if ( ! class_exists( 'mobile_menu' ) ) 
		 require_once( CHILD_DIR . '/lib/mobile-menu/init.php' ); 
} 
</code>

3) Change what you need to suit your needs!
