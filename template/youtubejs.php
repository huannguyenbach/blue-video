<?php 
$youtube_url = rwmb_meta( 'bluevideo_embed');
?>
<video id="video" src="" class="video-js vjs-default-skin" controls autoplay preload="auto" width="640" height="360" data-setup='{ "techOrder": ["youtube"], "quality": "720p", "src": "<?php echo $youtube_url; ?>" }'>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/videojs/youtube.js"></script>
