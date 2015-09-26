<?php 
// Category Archive Page
get_header(); ?>
<?php 
$args4 = array (
        'posts_per_page' => '3',
        'order' => 'desc'
    );
    $cat_post = new WP_Query($args4);
?>
<main id="achive-main">
            <div class="container">
            <?php  if ( $cat_post->have_posts() ) : ?>
                <div class="content">
                    <div class="column1">
                        <h3><?php single_cat_title( '', true ); ?></h3>  
                        <?php if ( category_description() ) : ?>
                            <?php echo category_description(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="column2">
                        <div id="share"></div>
                    </div>
                </div>
                <div class="show-post">
                    <div class="show-post-inner">
                    <?php while ( $cat_post->have_posts() ) : $cat_post->the_post(); ?>
                        <div class="post">
                            <div class="post-inner">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <div class="thumb">
                                        <div class="overlay">
                                            <img src="<?php echo get_template_directory_uri(); ?>/image/play43.png" alt="">
                                        </div>
                                        <?php the_post_thumbnail(array(600,600));?>
                                    </div>
                                </a>
                                <h3>
                                    <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                                </h3>
                            </div>
                        </div><!-- post -->
                    <?php endwhile; ?>
                    </div>
                </div><!-- show-post -->
            <?php endif; ?>
            </div>
</main>
<?php get_template_part('share-button'); ?>
<?php get_footer(); ?>