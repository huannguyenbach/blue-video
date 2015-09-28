<?php 
// Category Archive Page
get_header(); ?>

<main id="achive-main">
            <div class="container">
            <?php  if ( have_posts() ) : ?>
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
                    <div class="show-post-inner" id="show-post-inner">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="post" id="post">
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
                <div class="pagination" id="pagination">
                    <div class="nav-next"><?php previous_posts_link( 'Bài mới hơn' ); ?></div>
                    <div class="nav-previous"><?php next_posts_link( 'Bài cũ hơn' ); ?></div>
                    
                </div>
            <?php endif; ?>
            </div>
</main>
<?php get_template_part('share-button'); ?>
<?php get_footer(); ?>