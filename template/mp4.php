<?php 
$mp4 = rwmb_meta( 'bluevideo_embed' );
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,array(600,600), true);
?>
<video class="video-js vjs-default-skin" controls autoplay preload="auto"  poster="<?php echo $thumb_url[0]; ?>" data-setup="{}">
<source src="<?php echo $mp4; ?>" type="video/mp4" />
