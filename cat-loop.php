<?php
$args = array(
  'orderby' => 'name',
  'order' => 'ASC'
  );
$categories = get_categories($args);
  foreach($categories as $category) { 
  	$cat_name = $category->name;
  	$cat_link = get_category_link( $category->term_id );
  	$cat_id = $category->cat_ID;
  	$args2 = array (
		'post_type' => 'post',
		'cat' => $cat_id,
		'posts_per_page' => '5',
		'order' => 'DESC'
	);
  	$cat_loop = new WP_Query($args2);
	if ( $cat_loop->have_posts() ) :
	echo '<div class="cat-loop" id="cat-' .$cat_id. '">';
	echo '<div class="info">';
	echo '<div class="cat">';
	echo '<a href="' .$cat_link. '" title="' . sprintf( __( "Xem tất cả video tại %s" ), $cat_name ) . '">' .$cat_name. '</a>';
	echo '</div>';
	echo '<a href="' .$cat_link. '" title="' . sprintf( __( "Xem tất cả video tại %s" ), $cat_name ) . '"><div class="more">Xem thêm</div></a>';
	echo '</div>';
	echo '<div class="swiper-container">';
		echo '<div class="swiper-wrapper">';
	while ( $cat_loop->have_posts() ) : $cat_loop->the_post(); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,array(600,600), true);
?>	
	<div class="swiper-slide">
		<a href="<?php the_permalink(); ?>">
            <div class="thumb">
            	<div class="overlay">
            		<img src="<?php echo get_template_directory_uri(); ?>/image/play43.png">
            	</div>
            	<img data-src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" class="swiper-lazy">
            	<div class="swiper-lazy-preloader"></div>
            </div>
        </a>
        <h3>
        	<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
        </h3>

    </div>
<?php
endwhile;     
echo '</div>'; /*wrapper*/
// Add Arrows
echo '<div class="swiper-button-next"></div>';
echo '<div class="swiper-button-prev"></div>';
echo '</div>';/*container*/
echo '</div>';/*cat-loop*/
endif;
wp_reset_postdata();
?>
<script>  
	$(document).ready(function () {      
	  var swiper = new Swiper('#cat-<?php echo $cat_id; ?> .swiper-container', {
        nextButton: '#cat-<?php echo $cat_id; ?> .swiper-button-next',
        prevButton: '#cat-<?php echo $cat_id; ?> .swiper-button-prev',
        spaceBetween: 30,
        slidesPerView: 3,
        // Disable preloading of all images
	    preloadImages: false,
	    // Enable lazy loading
	    lazyLoading: true,
	    watchSlidesVisibility: true
		})
	})
</script>
<?php
}  	 
?>