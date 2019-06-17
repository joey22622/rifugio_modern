<?php

/* ====================== */
/* ::::::: Archive :::::: */
/* ====================== */

?>

<?php get_header(); ?>

<?php if ( class_exists('acf') ) : ?>  

	<?php

	$parallax = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full' );

	// vars ( Kirki )

	// parallax settings
	$title_parallax_archive = get_theme_mod( 'title_parallax_archive' );
	$title_archive_effect = get_theme_mod( 'title_archive_effect' );
	$url_video_parallax_archive = get_theme_mod( 'url_video_parallax_archive' );
	$url_image_parallax_archive = get_theme_mod( 'url_image_parallax_archive' );


	?>

	<?php if ( true == get_theme_mod( 'parallax_archive', true ) ) : ?>

			<div class="parallax" <?php if ( true == get_theme_mod( 'video_parallax_archive', true ) ) : ?>
			 data-jarallax-video="<?php echo esc_url($url_video_parallax_archive); ?>" <?php endif; ?> style="background-image: url(<?php echo esc_url($url_image_parallax_archive); ?>)">
			    <div class="info">
				     <h2 data-in-effect="<?php echo esc_html($title_archive_effect); ?>"><?php echo esc_html($title_parallax_archive); ?></h2>
			    </div>
			</div>

	<?php endif; ?> 

<div class="container">
  <div class="row">
	<h1 class="test">	ALSDFKJASDFASDFASDFASDF</h1>
  
  <div class="col-md-9">

    <?php 

      if ( have_posts() ) : 

        while ( have_posts() ) : the_post(); 
       
          get_template_part( 'template-parts/blog/classic/content', get_post_format() );  

        endwhile; 

      else : 

          get_template_part( 'template-parts/content', 'none' ); 

      endif;

    	the_posts_pagination( array(
      	'prev_text' => ( '<i class="fa fa-angle-left"></i>' ),
      	'next_text' => ( '<i class="fa fa-angle-right"></i>' ),
    	) );

    ?>
    

  </div>


  <div class="col-md-3 glacier-padding-left">

    <?php get_sidebar(); ?>

  </div>

 </div>
</div>

<?php endif; ?>

<?php get_footer(); ?>
