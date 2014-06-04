<?php
    global $is_tf_blog_page;
    get_header();
    if ($is_tf_blog_page)die;
?>
        <!-- content -->
        <div class="content post-detail <?php if( !is_front_page()) : ?>gbwedding-contentbg<?php endif; ?>">
            <?php tfuse_custom_title(); ?>
            <div class="entry">
                
                <?php while ( have_posts() ) : the_post();?>
                   <?php if(has_post_thumbnail()) { ?>
                        <div class="gbwedding-image-wrap">
                            <?php the_post_thumbnail('page-image'); ?>
                        </div>
                  <?php  } else {}  ?>

                     
                        <?php the_content(); ?>
                        <?php tfuse_header_content();?>
                <?php endwhile; // end of the loop. ?>
                    <?php if ( !empty( $post->post_excerpt ) ) : ?>
                    <div class="main_bot gbwedding-page-bottom gbwedding-page-bottom-<?php echo $post->post_name; ?>">
                            <?php the_excerpt();
                        else :
                            false; ?>
                    </div>
                        <?php endif; ?>
            </div><!--/ .entry -->
        <?php
            if ( !tfuse_page_options('disable_comments') ) tfuse_comments(); ?>
        <?php tfuse_shortcode_content('after'); ?>
        </div><!--/ .content -->
    </div><!--/ main_mid -->
</div><!--/ main_outer -->
<!--/ container -->
<?php get_footer(); ?>