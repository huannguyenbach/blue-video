<?php 
/*Video playlist on single page*/
?>
<?php
$categories = get_the_category();
$cat_first = $categories[0]->id;  
?>

<div class="playlist">
    <div class="playlist-title">
        <h3>Xem thêm</h3>
    </div>
    <div class="swiper-container">

<?php 
$args3 = array (
    'post_type' => 'post',
    'cat' => $cat_first,
    'post_status' => 'publish',
    'posts_per_page' => '10',
    'order' => 'desc'
    );
$playlist_loop = new WP_Query($args3);
if ($playlist_loop->have_posts()) :
    echo '<div class="swiper-wrapper">';
while ($playlist_loop->have_posts()) : $playlist_loop->the_post();
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,array(300,300), true);
?>
    <div class="swiper-slide">
        <a href="<?php the_permalink(); ?>">
            <div class="thumb">
                <img src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" class="swiper-lazy">
                <div class="overlay">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/play43.png" alt="Play">
                </div>
                
            </div>
        </a>
        <h4>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h4>
    </div>
 <?php 
    endwhile;
    echo '</div>'; /*swiper-wrapper*/
    endif;
    wp_reset_postdata();
 ?>   
        <!-- Add Scrollbar -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!-- swiper-container -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 'auto',
            spaceBetween: 30,
        });
    </script>
</div>
    <!-- //Playlist -->
