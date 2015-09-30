<?php 
/*Video container on single page*/
?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
    <!-- video -->
    <div id="video-container">
<?php 
$channel = rwmb_meta('bluevideo_channel');
$sub = rwmb_meta( 'bluevideo_check_sub' );
$sub_url = rwmb_meta('bluevideo_sub_url');
    if ($channel == 'value3') {get_template_part('template/mp4');}
    elseif ($channel == 'value2') {get_template_part('template/vimeo');}
    elseif ($channel == 'value1') { get_template_part('template/youtubejs');}
?>
<?php
if ($sub == '1') {
    echo '<track kind="subtitles" src="'.$sub_url.'" srclang="vi" label="vi"></track>';    
}
?>
<p class="vjs-no-js">Để xem được video hãy bật Javascript hoặc update trình duyệt của bạn <a href="http://videojs.com/html5-video-support/" target="_blank">hỗ trợ HTML5 video</a></p>
</video>
    </div>
    <!-- VIDEO INFO -->
    <div class="info">
        <!-- catgory -->
        <div class="cat">
            <?php the_category(','); ?>
        </div>
        <!-- Noi dung -->
        <div class="content"> 
            <h3>
                <a href="#" title=""><?php the_title(); ?></a>
            </h3>
            <div class="excerpt">
                <?php the_excerpt();?>
            </div>
            <div class="content-more">
                 <?php the_content(); ?>
            </div>
            <div id="content-more">+</div>  
            <div id="share"></div>
        </div>
    </div>
    <!-- INFO -->
</div>

<!-- container -->
<!-- LOGO BRAND JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/videojs/videojs.logobrand.js"></script>
<script>
    video = document.querySelector('video'),
    player = videojs(video);
    player.logobrand({
        image: "<?php echo get_template_directory_uri(); ?>/image/logo-video.png",
        destination: "http://noithatblue.com"
    });
</script>
<!-- // -->
<?php get_template_part('template/share-button'); ?>
<?php endwhile; ?>