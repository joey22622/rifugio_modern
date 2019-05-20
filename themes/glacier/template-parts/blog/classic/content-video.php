<?php

/* ============================ */
/* ::::: Video Post Format :::: */
/* ============================ */

if ( class_exists('acf') ) :

  // vars ( ACF )
  $video_host_type = get_field('video_host_type');
  $video_embed_code = get_field('video_embed_code');
  $self_hosted = get_field('video_self_hosted');

  // blog settings
  $column = get_field('blog_column', get_queried_object_id());
  $blog_animation = get_field('blog_animation', get_queried_object_id());

  ?>


  <article id="post-<?php the_ID(); ?>" <?php post_class($column); ?>>

   <div class="<?php echo esc_html($blog_animation); ?>">
  	
  	<div class="entry-header">

         <?php if ($video_host_type == 'embed-code') : ?>

          	  <div class="post-intro type-video">
        	  	  <?php 

                 echo wp_kses( $video_embed_code,

                 array('iframe' => array(
                  'width' => array(),
                  'height' => array(),
                  'src' => array(),
                  'frameborder' => array(),
                  'allowfullscreen' => array(),
                 ),
                 ) ); 

                 ?>
          		</div>

    		 <?php endif; ?>

        <?php if ($video_host_type == 'self-hosted') : ?>

              <div class="post-intro type-video">

                  <?php echo do_shortcode( '[video src="'. esc_url($self_hosted) .'"][/video]' ); ?>
            
              </div>

         <?php endif; ?>

        <h2 class="entry-title">

          <?php if ( is_sticky() ) : ?>

            <i class="fa fa-paperclip"></i>

          <?php endif; ?>

          <?php the_title( sprintf( '<a href="%s" rel="bookmark">', get_permalink() ), '</a>' ); ?>

        </h2>
    		
    		<div class="post-details">
                <?php if ( true == get_theme_mod( 'post_date', true ) ) : ?>
                <div class="post-date">
                  <?php the_time( 'F j, Y' ); ?>
                </div>
                <?php endif; ?>

                <?php if ( true == get_theme_mod( 'post_author', true ) ) : ?>
                <div class="post-author">
                  	<?php esc_html_e( 'by', 'glacier' ); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author(); ?></a>
                </div>
                <?php endif; ?>

                <?php if ( true == get_theme_mod( 'post_comments', true ) ) : ?>
                <div class="post-comment">
                  <a href="<?php comments_link(); ?>"><?php comments_number( esc_html__( 'Comments (0)', 'glacier'), esc_html__( 'Comment (1)', 'glacier' ), esc_html__( 'Comments (%)', 'glacier' ) ); ?></a>
                </div> 
                <?php endif; ?>
        </div>

    		<div class="post-info">
    			
           <?php is_single() ? the_content() : the_excerpt() ?>

           <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'glacier' ),
                        'after'  => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                    ) );
           ?>

          <?php if (is_single()) : ?>

             <div class="footer-single">

              <?php if ( true == get_theme_mod( 'post_categories', true ) ) : ?>

                    <div class="post-categories single"> 
                        <?php esc_html_e( 'Categories: ', 'glacier' ); ?><span class="cat-links"><?php echo get_the_category_list( esc_html__( ', ', 'glacier' ) ) ?></span>
                    </div>

              <?php endif; ?>


              <?php if ( true == get_theme_mod( 'post_social_icons', true ) ) : ?>

                  <?php get_template_part('template-parts/social-share'); ?>

               <?php endif; ?>
               
               <?php if ( true == get_theme_mod( 'post_tags', true ) ) : ?>

                    <div class="post-tags">
                        <?php the_tags(esc_html__( 'Tags: ', 'glacier'), ', ', ' '); ?>
                    </div>

                <?php endif; ?>

            </div>

          <?php endif; ?>

    		</div>
  		
  	  </div>

    </div>
  	
  </article>


<?php endif; ?>

