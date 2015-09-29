<?php 
  $vimeo_url = rwmb_meta( 'bluevideo_embed' );
?>
<script>
  videojs('video', { "techOrder": ["vimeo"], "src": "<?php echo $vimeo_url; ?>" }).ready(function() {
    // You can also change the video when you want
    // Here we cue a second video once the first is done
    this.one('ended', function() {
      this.src('<?php echo $vimeo_url; ?>');
      this.play();
    });
  });
  </script>