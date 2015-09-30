<?php
/* Template Name: Video Homepage */
get_header(); ?>

<main id="main" class="main">
	<?php get_template_part('template/main-slider'); ?>
	<div id="container"> 
		<?php get_template_part('template/cat-loop'); ?>
	</div><!--/container-->
</main>
 
<?php get_footer(); ?>
