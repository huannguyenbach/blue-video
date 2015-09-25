<?php
/*Index page*/
get_header(); ?>

<main id="main" class="main">
	<?php get_template_part('main-slider'); ?>
	<div id="container"> 
		<?php get_template_part('cat-loop'); ?>
	</div><!--/container-->
</main>
 
<?php get_footer(); ?>
