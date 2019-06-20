
<?php

 /*
 * Name: Single Project Portfolio
 */

?>

<?php get_header(); ?>

<?php if ( class_exists('acf') ) : ?>

	<?php
		$acfterm = get_queried_object();

	// vars ( ACF )
	$images = get_field('gallery_projects', $acfterm);
	$multiImg = true;
	$column = array(
		"page"				=> "multi-photo",
		"gallery" 			=> "col-md-12",
		"details" 			=> "col-md-12",
		"photo" 			=> "col-md-4",
		"detail-label" 		=> "col-md-2",
		"detail-content" 	=> "col-md-10"
		

	);
	if(count($images) <= 1):
		$multiImg = false;
		$column = array(
			"page"				=> "single-photo",
			"gallery" 			=> "col-md-6",
			"details" 			=> "col-md-6",
			"photo" 			=> "col-md-10",
			"detail-label" 		=> "col-md-4",
			"detail-content" 	=> "col-md-8"
	
		);
	endif;


	$logo = get_field('brand_logo', $acfterm);
	$website = get_field('brand_link', $acfterm);
	$visible = get_field('visible_details', $acfterm);
	$variants = "three";
	$project_title = get_field('project_details', $acfterm);
	$project_location = get_field('project_location', $acfterm);
	$description = get_field('brand_description', $acfterm);
	$term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	?>

    <div class="container <?php echo $column["page"]?>">
    	<div class="row">
			<div class="col-md-12">
				<div class="container">
				<div  class="row post-title-row">
					<div class="col-md-12 title-inner-wrap">
						<h1><?php echo $term->name;?></h1>
	
	<?php if($logo): ?>

						<div class="logo-wrap"><?php echo $logo; ?></div><!-- /.logo-wrap -->

	<?php endif; ?>
					</div>
					<!-- /.col-md-12.title-inner-wrap -->

				</div>
				<!-- /.row.post-title-row -->

				<div class="row content-wrap">
	<?php if ( $images ) : ?> 
				<div class="<?php echo $column["gallery"] ?>">
				<div class="row">
		<?php foreach ( $images as $image ) : ?>
					<div class="<?php echo $column['photo'] ?> gallery-projects <?php echo esc_html($column_single); ?>">
						<a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['title']); ?>" class="showcase" data-rel="lightcase:gallery">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_html($image['alt']); ?>">
						</a>
					</div>
					<!-- /.col-md-12.gallery-projects -->
		<?php endforeach; ?>
				</div>
				<!-- /.row -->
				</div>
				<!-- /.col-md-12 -->


	<?php endif; ?>


						
					<div class="<?php echo $column['details'] ?> project-details">
<?php echo $description; ?> 
						<div class="row">
							<div class="col-12-md project-link">
								<a href="<?php echo $website ?>" class="brand-website" target="_blank">
									<div class="line-left"></div>
										<span>visit website</span>
									<div class="line-right"></div>
								</a> <!-- /.brand-website -->


							</div>
							<!-- /.col-12-md.project-link -->
						</div>
						<!-- /.row -->	
					</div>
					<!-- /.project-details -->
				</div>
				<!-- /.row .content-wrap -->
				</div>
				<!-- /.container -->

			</div>
			<!-- /.col-md-12 -->

		</div>
		<!-- /.row -->
	</div>
	<!-- .container	 -->

<?php endif; ?>

<?php get_footer();
