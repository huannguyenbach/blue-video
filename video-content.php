<?php 
/*Video container on single page*/
?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
    <!-- video -->
    <div id="video-container">
       <video class="video-js vjs-default-skin" controls autoplay preload="auto"  poster="<?php echo get_template_directory_uri(); ?>/image/4.jpg" data-setup="{}">
            <source src="<?php echo get_template_directory_uri(); ?>/image/iphone6s.mp4" type='video/mp4' />
            <track kind="captions" src="" srclang="" label=""></track>
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
<?php get_template_part('share-button'); ?>
<?php endwhile; ?>