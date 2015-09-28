<?php 
/*theme support*/
function custom_theme_setup() {
	load_theme_textdomain('bluevideo', get_template_directory(). '/languages');
	add_theme_support('post-thumbnails');
	register_nav_menu('primary', __('Dropdown menu', 'bluevideo'));
	/*INFINITE SCROLL*/
}

add_action( 'after_setup_theme', 'custom_theme_setup' );
function bluevideo_infinite_scroll_init() {
    add_theme_support( 'infinite-scroll', array(
        'container' => 'show-post-inner',
        'footer' => 'footer',
    ) );
}
add_action( 'after_setup_theme', 'bluevideo_infinite_scroll_init' );