<!-- SHARE BUTTON -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jssocial/jssocials.min.js"></script>
<script>
$("#share").jsSocials({
    url: "<?php the_permalink(); ?>",//Thay đổi link share
    text: "<?php the_title(); ?>", //Thay đổi text share
    showLabel: false,
    showCount: "inside",
    shares: ["facebook", "twitter", "googleplus", "pinterest"]
});
</script>
<!-- // -->