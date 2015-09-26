<?php 
/*Single Page*/
get_header();
?>
<main id="single-main" <?php post_class(); ?>>
    <?php get_template_part('video-content'); ?> 
    <?php get_template_part('video-playlist-single'); ?> 
</main>
<?php get_footer(); ?>