<?php

/* ============================ */
/* ::::::: Minimal Blog ::::::: */
/* ============================ */

  $thumbnail = get_the_post_thumbnail($post->ID);

  // vars ( ACF )

  // blog settings
  $column = get_field('blog_column', get_queried_object_id());
  $blog_animation = get_field('blog_animation', get_queried_object_id());

?>

<article id="post-<?php the_ID(); ?>" <?php post_class($column); ?>>

<div class="blog-minimal <?php echo esc_html($blog_animation); ?>">

<div class="entry-header">

<div class="col-md-5">

		<?php if ($thumbnail) : ?>            

				<a href="<?php the_permalink(); ?>">
						<div class="post-intro"><?php echo wp_kses( $thumbnail, array('img' => array('width' => array(), 'height' => array(), 'src' => array(), 'class' => array(), 'alt' => array(), 'srcset' => array(), 'sizes' => array())) ); ?></div>
				</a>

		<?php endif; ?>

	</div>

		<div class="col-md-7">

				<h2 class="entry-title">

						<?php if ( is_sticky() ) : ?>

							<i class="fa fa-paperclip"></i>

						<?php endif; ?>

						<?php the_title( sprintf( '<a href="%s" rel="bookmark">', get_permalink() ), '</a>' ); ?>

				</h2>

				<div class="post-details">

						<div class="post-date">

								<?php the_time( 'F j, Y' ); ?>

						</div>
						
				</div>

				<div class="post-info">

					<?php is_single() ? the_content() : the_excerpt() ?>

				</div>
		</div>

	</div>

</div>

</article>
