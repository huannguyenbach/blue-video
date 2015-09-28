<?php 
/*Theme Define*/

if ( !defined( 'RWMB_DIR' ) ) {
	define( 'RWMB_DIR', trailingslashit( get_template_directory() ) . 'lib/meta-box/' );
}

if ( !defined( 'RWMB_URL' ) ) {
	define( 'RWMB_URL', trailingslashit( get_template_directory_uri() ) . 'lib/meta-box/' );
}

if ( !defined( 'THEME_SETUP_DIR' ) ) {
	define('THEME_SETUP_DIR', trailingslashit( get_template_directory() ) . 'lib/theme-setup/');
}

if ( !defined( 'THEME_SETUP_URL' ) ) {
	define('THEME_SETUP_URL', trailingslashit( get_template_directory_uri() ) . 'lib/theme-setup/');
}
if ( !defined( 'AJAX_DIR' ) ) {
	define( 'AJAX_DIR', trailingslashit( get_template_directory() ) . 'lib/ajax/' );
}

if ( !defined( 'AJAX_URL' ) ) {
	define( 'AJAX_URL', trailingslashit( get_template_directory_uri() ) . 'lib/ajax/' );
}