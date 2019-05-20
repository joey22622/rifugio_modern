<?php

/**
 * Template Name: Custom Page
 */

?>

<?php get_header(); ?>

<?php if ( class_exists('acf') ) : ?>  

	<?php

	$parallax = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full' );

	// vars ( ACF )
	
	// page settings
	$sidebar = get_field('sidebar');
	$parallax_header = get_field('parallax_header');
	$container = get_field('container');
	$position_sidebar = get_field('position_sidebar');

	// parallax settings
	$title_parallax = get_field('title_parallax');
	$text_animation_parallax = get_field('text_animation_parallax');
	$background_video_parallax = get_field('background_video_parallax');
	$youtube_parallax = get_field('youtube_parallax');
	$vimeo_parallax = get_field('vimeo_parallax');
	$self_hosted_parallax = get_field('self_hosted_parallax');

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

			<?php 

				while ( have_posts() ) : the_post(); 

					the_content(); 
					
				endwhile;
				 
			?>	

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