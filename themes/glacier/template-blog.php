<?php

 /*
 * Template Name: Blog Page
 */

?>

<?php get_header(); ?>

<?php if ( class_exists('acf') ) : ?>  

  <?php


  $parallax = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full' );

  // vars ( ACF )

  // page settings
  $container = get_field('container');
  $sidebar = get_field('sidebar');
  $parallax_header = get_field('parallax_header');

  // parallax settings
  $title_parallax = get_field('title_parallax');
  $text_animation_parallax = get_field('text_animation_parallax');
  $background_video_parallax = get_field('background_video_parallax');
  $youtube_parallax = get_field('youtube_parallax');
  $vimeo_parallax = get_field('vimeo_parallax');
  $self_hosted_parallax = get_field('self_hosted_parallax');
 
  // blog settings
  $output_content = get_field('output_content');
  $pagination = get_field('pagination');
  $blog_max_posts = get_field('blog_max_posts');
  $blog_variants_styles = get_field('blog_variants_styles');
  $position_sidebar = get_field('position_sidebar');
  
  ?>


  <?php if ( $parallax_header == 'show' ) : ?>

      <div class="parallax" <?php if ( $background_video_parallax == 'youtube' || $background_video_parallax == 'vimeo' ) : ?>
       data-jarallax-video="<?php echo esc_url($youtube_parallax); ?>" <?php endif; ?> <?php if ( $background_video_parallax == 'html5' ) : ?> data-jarallax-video="mp4:<?php echo esc_url($self_hosted_parallax); ?>" <?php endif; ?> style="background-image: url(<?php echo esc_url($parallax); ?>)">
          <div class="info">
             <h2 data-in-effect="<?php echo esc_html($text_animation_parallax); ?>"><?php echo esc_html($title_parallax); ?></h2>
          </div>
      </div>

  <?php endif; ?>  


  <?php if ( $container == 'full' ) : ?>
        
    <div class="container">

      <div class="row">
       
       <div class="col-md-12">

  <?php endif; ?>

  <?php if ( $container == 'box' ) : ?>
        
    <div class="container">

      <div class="row">

      <?php if ( $sidebar == 'show' ) : ?>

         <?php if ( $position_sidebar == 'left-sidebar' ) : ?>
      
            <div class="col-md-3 glacier-padding-right">

                <?php get_sidebar(); ?>

            </div>

         <?php endif; ?>

      <?php endif; ?>
       
       <div class="col-md-9">
      
  <?php endif; ?>


            <?php if ( $output_content == 'top' ) : ?>

              <?php 

                while ( have_posts() ) : the_post(); 

                  the_content(); 
                  
                endwhile;
                 
              ?>  

            <?php endif; ?>


                      <div class="blogContainer ajaxContainer isotope">

                          <div class="gutter-sizer"></div>


                                <?php  

                                $paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);

                                $args = array( 
                                  'paged' => $paged, 
                                  'post_type' => 'post', 
                                  'posts_per_page' => ($pagination == 'hide' ? -1 : $blog_max_posts)
                                );

                                $loop = new WP_Query( $args );

                                while ( $loop->have_posts() ) : $loop->the_post();  

                                ?>

                                    <?php if ( $blog_variants_styles == 'classic' ) : ?>

                                      <?php get_template_part( 'template-parts/blog/classic/content', get_post_format() ); ?>

                                    <?php endif; ?>
                                   
                                   
                                    <?php if ( $blog_variants_styles == 'minimal' ) : ?>

                                      <?php get_template_part( 'template-parts/blog/minimal' ); ?>

                                    <?php endif; ?>

                                     
                                    <?php if ( $blog_variants_styles == 'creative' ) : ?>

                                      <?php get_template_part( 'template-parts/blog/creative' ); ?>

                                    <?php endif; ?>
                                   

                                <?php endwhile; ?>

                                <?php wp_reset_postdata(); ?>
                        </div>

                        <?php if ( $pagination == 'ajax-loader' ) : ?>

                          <?php glacier_ajax_load(); ?>

                          <!-- AJAX LOAD BUTTON -->
                          <div class="text-center load-more">
                            <a class="ajax-button"><i class="fa fa-spinner fa-spin"></i><span><?php esc_html_e('Load More', 'glacier' ); ?></span></a>
                          </div>
                          <!-- END AJAX LOAD BUTTON -->

                        <?php endif; ?>


                	<?php if ( $pagination == 'classic' ) : ?>

                    <!-- CLASSIC PAGINATION -->
                    <div class="pagination">
                    <div class="nav-links">  
                              
                              <?php

                              global $loop;
                              $big = 999999999; // need an unlikely integer
                              echo paginate_links( array(
                              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                              'format' => '?paged=%#%',
                              'current' => max( 1, get_query_var('paged') ),
                              'total' => $loop->max_num_pages,
                              'show_all'     => false,
                              'prev_text'    => ('<i class="fa fa-angle-left"></i>'),
                              'next_text'    => ('<i class="fa fa-angle-right"></i>'),
                              'add_args' => false
                              ) );

                              ?>
                    </div>
                    </div>
                    <!-- END CLASSIC PAGINATION -->

                 <?php endif; ?>


        <?php if ( $output_content == 'bottom' ) : ?>

          <?php 

            while ( have_posts() ) : the_post(); 

              the_content(); 
              
            endwhile;
             
          ?>  

        <?php endif; ?>
        

       </div>
     

      <?php if ( $sidebar == 'show' ) : ?>

         <?php if ( $position_sidebar == 'right-sidebar' ) : ?>
      
            <div class="col-md-3 glacier-padding-left">

                <?php get_sidebar(); ?>

            </div>

         <?php endif; ?>

      <?php endif; ?>

  </div>
      </div>

<?php endif; ?>

<?php get_footer(); ?>
