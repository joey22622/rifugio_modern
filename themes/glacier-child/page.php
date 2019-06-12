<?php

/* ====================== */
/* :::::::: Page :::::::: */
/* ====================== */

$url = "https://www.google.com/";
wp_redirect($url);
exit;

?>

<?php get_header(); ?>

<div class="container">
  <div class="row main-content-wrap">
  
	<div class="col-md-10 col-md-offset-1">

			<?php
				if(is_front_page()):
			?>
		<div class="home-logo-wrap">
<?php $logo = get_field('home_logo', 'option');

?>
        	<div class="logo-wrap"> 
      			<?php echo $logo ?>
        	</div>
      		<!-- logo-wrap -->
		</div>
		<!-- /.home-logo-wrap -->
				
			<?php
				else:

				the_title( '<h1 class="entry-header">', '</h1>' );
				endif;
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content.
					the_content();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					
				endwhile;

			?>

			





	</div>


	<div class="col-md-3 glacier-padding-left">

		<?php get_sidebar(); ?>

	</div>

 </div>
</div>
<?php
        $map = get_field("show_map");
        if($map):
		?>
		<div class="container-fluid map-container">
			<div class="row map-row">
				<div class="map-wrap col-12-md">
						<div id="map"></div>
						<!-- /#map -->
				</div>
				<!-- /.map-wrap -->				
			</div>
			<!-- /.row map-row -->			
		</div>
		<!-- /.container-fluid map-container -->


        <?php
        endif;
?>

<?php get_footer(); ?>