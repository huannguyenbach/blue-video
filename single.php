<?php 
/*Single Page*/
get_header();
?>
<main id="single-main" <?php post_class(); ?>>
    <?php get_template_part('template/video-content'); ?> 
    <?php get_template_part('template/video-playlist-single'); ?> 
</main>
<?php get_footer(); ?>