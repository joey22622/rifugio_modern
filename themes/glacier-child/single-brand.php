<?php

 /*
 * Name: Single Project Portfolio
 */

?>

<?php get_header(); ?>

<?php if ( class_exists('acf') ) : ?>

	<?php

	// vars ( ACF )
	$images = get_field('gallery_projects');
	$logo = get_field('brand_logo');
	$website = get_field('brand_link');
	$visible = get_field('visible_details');
	$variants = get_field('single_variants_style');
	// $column_single = get_field('column_single');
	// $social_icons_portfolio = get_field('social_icons_portfolio');

	// project description
	$project_title = get_field('project_details');
	// $author_title = get_field('author_title');
	// $author = get_field('author');
	// $client_title = get_field('client_name_title');
	// $project_date_title = get_field('project_date_title');
	// $project_location_title = get_field('project_location_title');
	// $client_name = get_field('client_name');
	// $project_date = get_field('project_date');
	$project_location = get_field('project_location');

	// parallax settings
	// $parallax_image = get_field('parallax_image');
	// $parallax_header = get_field('parallax_header');
	// $title_parallax = get_field('title_parallax');
	// $text_animation_parallax = get_field('text_animation_parallax');
	// $background_video_parallax = get_field('background_video_parallax');
	// $youtube_parallax = get_field('youtube_parallax');
	// $vimeo_parallax = get_field('vimeo_parallax');
	// $self_hosted_parallax = get_field('self_hosted_parallax');
	
	?>

	<?php if ( $parallax_header == 'show' ) : ?>

			<div class="parallax" <?php if ( $background_video_parallax == 'youtube' || $background_video_parallax == 'vimeo' ) : ?>
			 data-jarallax-video="<?php echo esc_url($youtube_parallax); ?>" <?php endif; ?> <?php if ( $background_video_parallax == 'html5' ) : ?> data-jarallax-video="mp4:<?php echo esc_url($self_hosted_parallax); ?>" <?php endif; ?> style="background-image: url(<?php echo esc_url($parallax_image); ?>)">
			    <div class="info">
				     <h2 data-in-effect="<?php echo esc_html($text_animation_parallax); ?>"><?php echo esc_html($title_parallax); ?></h2>
			    </div>
			</div>

	<?php endif; ?> 

        
    <div class="container">

      <div class="row">
					<?php if ( $variants == 'three' ) : 
						$column_single = 'col-md-4'?> 

      		<!-- VARIANT PROJECT 3 -->
			<div class="col-md-12">
				<div  class="row post-title-row">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
					<?php if ( $column_single == 'col-md-6' || $column_single == 'col-md-4' || $column_single == 'col-md-3') : ?> 

						<div class="row">

					<?php endif; ?>

				<?php if ( $images ) : ?> 

				        <?php foreach ( $images as $image ) : ?>
				            <div class="gallery-projects <?php echo esc_html($column_single); ?>">
				             <div class="overlay-box">
				                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['title']); ?>" class="showcase" data-rel="lightcase:gallery">
									 <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_html($image['alt']); ?>">
				                </a>
				             </div>	
				            </div>
				        <?php endforeach; ?>

				<?php endif; ?>

					<?php if ( $column_single == 'col-md-6' || $column_single == 'col-md-4' || $column_single == 'col-md-3') : ?> 

					</div>

					<?php endif; ?>

			</div>
			<!-- END VARIANT PROJECT 3 -->

			<?php endif; ?>
			

	




			<?php 

				while ( have_posts() ) : the_post(); 

					the_content(); 
					
				endwhile;
				 
			?>	


				<?php if ( $visible == 'show') : ?> 



				<div class="project-details">


<?php
// check if the repeater field has rows of data
						if( have_rows('project_brands') ):	
?>
				<p class="project-brands">
<?php
							$rowCount = count( get_field('project_brands')); //GET THE COUNT
							$i = 1;
							$commaSpace = ", ";
							 while ( have_rows('project_brands') ) : the_row();
								 $post_object = get_sub_field('brand');
									 if($i >= $rowCount):
										$commaSpace = "";
									 endif;
									if($post_object):
										$post = $post_object;
										setup_postdata( $post );
?>
<a href="<?php the_permalink()?>"><?php echo  get_the_title(); echo $commaSpace; ?></a>
<?php						
								wp_reset_postdata();
								endif;
								$i++;
							endwhile;
?>
				</p>
				<!-- /.project-brands -->
<?php
						endif;


							if ( $social_icons_portfolio == 'show' ) : ?> 

					<h5><?php esc_html_e('Share', 'glacier' ); ?></h5>
					<?php get_template_part('template-parts/social-share'); ?>

				<?php endif; ?>

				</div>

				<?php endif; ?>

			</div>
			

		 </div>

		 <!-- NAVIGATION -->
		 <div class="portfolio-single-nav">

			<?php echo glacier_single_navigation(); ?>

		 </div>
		 <!-- END NAVIGATION -->

		</div>

<?php endif; ?>

<?php get_footer();
