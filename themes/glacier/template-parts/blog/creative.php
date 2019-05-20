<?php

/* ============================ */
/* ::::::: Creative Blog :::::: */
/* ============================ */

  $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full' );

  // vars ( ACF )

  // blog settings
  $column = get_field('blog_column', get_queried_object_id());
  $blog_animation = get_field('blog_animation', get_queried_object_id());

?>


  <article id="post-<?php the_ID(); ?>" <?php post_class($column); ?>>

      <div class="blog-creative <?php echo esc_html($blog_animation); ?>">

        <div class="entry-header">

          <a href="<?php the_permalink(); ?>">

            <?php if ($thumb) : ?>                         

               <div style="background-image:url('<?php echo esc_url($thumb); ?>')" class="work-box"></div>

            <?php endif; ?>

            <div class="creative-box">
      
              <div class="blog-creative-item">

                <div class="item-info">

                    <span><?php echo get_the_title(); ?></span>

                    <em>

                    <div class="post-date">
                      <?php the_time( 'F j, Y' ); ?>
                    </div>

                    <div class="post-author">
                          <?php esc_html_e('by', 'glacier'); ?> <?php the_author(); ?>
                    </div>

                    </em>

                </div>

              </div>

            </div>

          </a>

       </div>
   
     </div>

   </article>



