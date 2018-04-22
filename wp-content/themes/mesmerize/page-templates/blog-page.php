<?php
/*
Template Name: blog strict
*/

mesmerize_get_header();
?>
    <div class="page-content blog-page">
        <div class="gridContainer content">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-9"> 
                    <div class="post-list row">
                       <?php // Display blog posts on any page @ http://m0n.co/l
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('showposts=20' . '&paged='.$paged);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        
                        <div class="post-list-item col-xs-12 space-bottom col-sm-12 col-md-6" data-masonry-width="col-sm-12.col-md-6" style="width: 50%; position: absolute; left: 0%; top: 769px;">
                            <div class="blog-post card  post type-post status-publish format-standard has-post-thumbnail hentry category-story-ru">
                                <div class="post-content">
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>" class="post-list-item-thumb ">
                                            <?php the_post_thumbnail(); ?> 
                                        </a>
                                    </div> 
                                    <div class="col-xs-12 col-padding col-padding-xs">
                                        <h3 class="post-title">
                                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="post-meta small muted space-bottom-small">
                                            <span class="date"><?php echo get_the_date(); ?></span>
                                        </div> 
                                        <div class="post-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 

                        <?php endwhile; ?>

                        <?php if ($paged > 1) { ?>

                        <nav id="nav-posts">
                            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
                        </nav>

                        <?php } else { ?>

                        <nav id="nav-posts">
                            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                        </nav>

                        <?php } ?>

                        <?php wp_reset_postdata(); ?>  
                    </div> 
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3 page-sidebar-column">
                    <div class="sidebar">
                        <div class="sidebar-row">
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
