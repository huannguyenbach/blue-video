<?php 
/*theme support*/
function custom_theme_setup() {
	load_theme_textdomain('bluevideo', get_template_directory(). '/languages');
	add_theme_support('post-thumbnails');
	register_nav_menu('primary', __('Dropdown menu', 'bluevideo'));
}

add_action( 'after_setup_theme', 'custom_theme_setup' );