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
			"gallery" 			=> "col-md-5",
			"details" 			=> "col-md-7",
			"photo" 			=> "col-md-11",
			"detail-label" 		=> "col-md-4",
			"detail-content" 	=> "col-md-8"
	
		);
	endif;

	$logo = get_field('brand_logo');
	$website = get_field('brand_link');
	$visible = get_field('visible_details');
	$variants = "three";
	$project_title = get_field('project_details');
	$project_location = get_field('project_location');
	?>

    <div class="container <?php echo $column["page"]?>">
    	<div class="row">
			<div class="col-md-12">
				<div class="container">
				<div  class="row post-title-row">
					<div class="col-md-12 title-inner-wrap">
						<h1><?php echo get_the_title(); ?></h1>
	
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
<?php 

				while ( have_posts() ) : the_post(); 

					the_content(); 
					
				endwhile;
				 ?> 
						<div class="row">
							<div class="col-md-12 project-points">
						<?php
						// check if the repeater field has rows of data
						if( have_rows('project_brands') ):	
							$rowCount = count( get_field('project_brands')); //GET THE COUNT
							$brandLabel = "Brand";
							if($rowCount > 1): $brandLabel = "Brands"; endif;
						?>
							<div class="row">
								<div class="col-md-2 detail-label">
									<span><?php echo $brandLabel ?></span>
								</div>
				<!-- /.col-md.3 detail-label -->
								<div class="col-md-10 detail-content">
									<p class="project-brands">
							<?php
							$i = 1;
							$commaSpace = "<span class='divider'> | </span>";
							 while ( have_rows('project_brands') ) : the_row();
								 $post_object = get_sub_field('brand');
									 if($i >= $rowCount):
										$commaSpace = "";
									 endif;
									if($post_object):
										$post = $post_object;
										setup_postdata( $post );
								?>
										<a href="<?php the_permalink()?>"><?php echo  get_the_title();?></a>
										<?php echo $commaSpace; ?>
								<?php						
								wp_reset_postdata();
								endif;
								$i++;
							endwhile;
?>
									</p>
									<!-- /.project-brands -->
								</div>
								<!-- /.col-md-9 detail-content -->
							</div>
							<!-- /.row -->
							<?php
							endif;

							if($project_location):
							?>	
							<div class="row">
								<div class="<?php echo $column["detail-label"]?> detail-label">
									<span>Location</span>
								</div>
								<!-- /.col-md-3 detail-label -->
								<div class="<?php echo $column["detail-content"]?> detail-content">
									<p><?php echo $project_location ?></p>
								</div>
								<!-- /.col-md-9 detail-content -->
							</div>
							<!-- /.row -->	
							<?php
							endif;
							?>				
							</div>
							<!-- /.col-md-12.project-points -->
						</div>
						<!-- /.row -->								

				</div>
				<!-- /.col-md-12.project-details -->
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
