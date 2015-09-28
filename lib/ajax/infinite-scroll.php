<?php
function custom_theme_js(){
	wp_register_script( 'infinite_scroll',  get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array('jquery'),null,true );
	if( ! is_singular() ) {
		wp_enqueue_script('infinite_scroll');
	}
}
add_action('wp_enqueue_scripts', 'custom_theme_js');
/**
 * Infinite Scroll
 */
function custom_infinite_scroll_js() {
	if( ! is_singular() ) { ?>
	<script>
	var infinite_scroll = {
		loading: {
			img: "<?php echo get_template_directory_uri(); ?>/image/ring.gif",
			msgText: "<?php _e( '', 'bluevideo' ); ?>",
			finishedMsg: "<?php _e( 'Hết', 'bluevideo' ); ?>"
		},
		"nextSelector":"#pagination .nav-previous a",
		"navSelector":"#pagination",
		"itemSelector":"#post",
		"contentSelector":"#show-post-inner"
	};
	jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll );
	</script>
	<?php
	}
}
add_action( 'wp_footer', 'custom_infinite_scroll_js',100 );
