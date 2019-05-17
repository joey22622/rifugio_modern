<?php

/* ============================ */
/* ::::: Quote Post Format :::: */
/* ============================ */

if ( class_exists('acf') ) :

    $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

    // vars ( ACF )
    $quote_content = get_field('quote_content');
    $quote_source_name = get_field('quote_source_name');
    $quote_source_link_url = get_field('quote_source_link_url');

    // blog settings
    $column = get_field('blog_column', get_queried_object_id());
    $blog_animation = get_field('blog_animation', get_queried_object_id());

    ?>


    <article id="post-<?php the_ID(); ?>" <?php post_class($column); ?>>

     <div class="<?php echo esc_html($blog_animation); ?>">
    	
    	<div class="entry-header">

      	  <?php if ($thumbnail_src) : ?>

      		<div class="post-intro type-quote" style="background-image: url('<?php echo esc_url($thumbnail_src[0]); ?>');">
    	  		
            <blockquote>

              <p>
                <?php echo esc_html($quote_content); ?>
              </p>

              <?php if ($quote_source_name) : ?>

                 <?php if ($quote_source_link_url) : ?>

                    <cite><a href="<?php echo esc_url($quote_source_link_url); ?>"><?php echo esc_html($quote_source_name); ?></a></cite>

                  <?php else : ?>

                    <cite><?php echo esc_html($quote_source_name); ?></cite>

                <?php endif; ?>

              <?php endif; ?>

            </blockquote>

      		</div>

          <?php else : ?>

            <div class="post-intro type-quote img-none">
            
            <blockquote>

              <p>
                <?php echo esc_html($quote_content); ?>
              </p>

              <?php if ($quote_source_name) : ?>

                 <?php if ($quote_source_link_url) : ?>

                    <cite><a href="<?php echo esc_url($quote_source_link_url); ?>"><?php echo esc_html($quote_source_name); ?></a></cite>

                  <?php else : ?>

                    <cite><?php echo esc_html($quote_source_name); ?></cite>

                <?php endif; ?>

              <?php endif; ?>

            </blockquote>

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
