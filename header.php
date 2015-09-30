<?php 
/*Header Template*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
 	<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BLUE Video</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/videojs/video-js.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <!-- SWIPER -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/swiper.jquery.min.js"></script>
        <!-- VIDEOJS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> 
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php if ( is_single() ) : ?>
            <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/videojs/video.js"></script>
            <script>
                    videojs.options.flash.swf = "<?php echo get_template_directory_uri(); ?>/js/vendor/videojs/video-js.swf";
            </script>
        <?php endif;// is_single() ?>
        <!-- Google Analytics -->
        <?php include_once("analyticstracking.php") ?> 
        <!-- ////// -->
    	<header id="header" class="header">
    		<div id="container">
	    		<div id="logo">
                    <a href="http://noithatblue.com/video">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/header-logo.png" alt="BLUE INTERIOR">
                    </a>      
                </div>
                <?php get_template_part('template/nav-menu'); ?>
	    	</div><!-- container-->
    	</header><!-- /header -->