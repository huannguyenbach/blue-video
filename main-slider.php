<?php 
/*Main slider for homepage*/
?>

<div id="main-slider" class="main-slider">
	<!-- Slider main container -->
	<div class="swiper-container">
	    <!-- Additional required wrapper -->
	    <?php 
	    	$args = array (
	    			'post_type' => 'post',
	    			'posts_per_page' => '5',
	    			'order' => 'desc',
	    			'post_status' => 'publish'
	    		);
	    	$main_slider = new WP_Query( $args );
	    	if ($main_slider->have_posts()) :
	    		echo '<div class="swiper-wrapper">';
	    	while ( $main_slider->have_posts() ) : $main_slider->the_post();
	    ?>
	        <!-- Slides -->
	        <div class="swiper-slide">
	        	<a href="<?php the_permalink(); ?>">
		        	<?php the_post_thumbnail(); ?>
		        </a>
		        <div class="slider-info">
		        	<div class="cat"><?php the_category(','); ?></div>
		        	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		        </div>
		        <a href="<?php the_permalink(); ?>"><div class="video-over"></div></a>
	        </div>
	    <?php
		    endwhile;
		    echo '</div>';
		    endif;
		    wp_reset_postdata();
	    ?>
	    <!-- navigation buttons -->
	    <div class="swiper-button-prev"></div>
	    <div class="swiper-button-next"></div>
	</div>
</div><!-- /main-slider -->
<script>  
 $(document).ready(function () {      
  var swiper = new Swiper('#main-slider .swiper-container', {
    effect: 'coverflow',
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflow: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true
    		},
    nextButton: '#main-slider .swiper-button-next',
    prevButton: '#main-slider .swiper-button-prev'
	})
});
</script>