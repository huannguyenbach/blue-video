<?php 
/*Video container on single page*/
?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
    <!-- video -->
    <div id="video-container">
<?php 
$channel = rwmb_meta('bluevideo_channel');
$mp4 = rwmb_meta( 'bluevideo_mp4' );
$youtube_url = rwmb_meta( 'bluevideo_youtube');
$caption = rwmb_meta( 'bluevideo_check_caption' );
$caption_url = rwmb_meta('bluevideo_captionurl');
    if ($channel == 'value3') {
        echo '<video class="video-js vjs-default-skin" controls autoplay preload="auto"  poster="<?php echo get_template_directory_uri(); ?>/image/4.jpg" data-setup="{}">';
        echo '<source src="'.$mp4.'" type="video/mp4" />';
    }
    elseif ($channel == 'value1') { ?>
        <video id="video" src="" class="video-js vjs-default-skin" controls autoplay preload="auto" width="640" height="360" data-setup='{ "techOrder": ["youtube"], "quality": "720p", "src": "<?php echo $youtube_url; ?>" }'>
<?php 
    }
    echo '<track kind="captions" src="" srclang="" label=""></track>';
    echo '<p class="vjs-no-js">Để xem được video hãy bật Javascript hoặc update trình duyệt của bạn <a href="http://videojs.com/html5-video-support/" target="_blank">hỗ trợ HTML5 video</a></p>';
    echo '</video>';

?>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/videojs/youtube.js"></script>
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
<?php get_template_part('share-button'); ?>
<?php endwhile; ?>