<?php

/* ============================ */
/* ::: Gallery Post Format :::: */
/* ============================ */

if ( class_exists('acf') ) :

  $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

  // vars ( ACF )
  $gallery_type = get_field('gallery_type');
  $type_gallery_images = get_field('type_gallery_images');

  // blog settings
  $column = get_field('blog_column', get_queried_object_id());
  $blog_animation = get_field('blog_animation', get_queried_object_id());

  ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class($column); ?>>

   <div class="<?php echo esc_html($blog_animation); ?>">


         <?php if ($gallery_type == 'slider') : ?>


          <div class="entry-header">

          	  <?php if ( $type_gallery_images ) : ?> 

                  <div class="flexslider">
                   <ul class="slides">

                    <?php foreach ( $type_gallery_images as $images ) : ?>

                        <?php 

                            $image = $images['url'];

                        ?>

                        <li>
                           <div style="background-image:url(<?php echo esc_url($image) ?>)"></div>

                           <?php if ( $images['title'] ) : ?> 

                             <p class="flex-caption"><?php echo esc_html($images['title']); ?></p>

                            <?php endif; ?>

                        </li>
                    <?php endforeach; ?>

                  </ul>
                </div>

              <?php endif; ?>

    		 <?php endif; ?>

         <?php if ($gallery_type == 'tiled') : ?>

          <div class="entry-header">

              <?php if ( $type_gallery_images ) : ?> 

                    <ul class="gallery-projects">

                      <?php foreach ( $type_gallery_images as $images ) : ?>

                        <?php 

                            $original_image = $images['url'];

                            $image = aq_resize( $original_image, 760, 615, true ); //resize & crop the image 

                        ?>
                        
                         <li>
                            <a href="<?php echo esc_url($image); ?>" title="<?php echo esc_html($images['title']); ?>" class="showcase" data-rel="lightcase:gallery">
                               <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($images['alt']); ?>">
                            </a>
                         </li> 
                        
                      <?php endforeach; ?>

                    </ul>

              <?php endif; ?>

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

