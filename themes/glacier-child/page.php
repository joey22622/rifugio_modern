<?php

/* ====================== */
/* :::::::: Page :::::::: */
/* ====================== */


?>

<?php get_header(); ?>

<div class="container">
  <div class="row d-flex justify-content-center">
  
	<div class="content-wrap">

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

<?php get_footer(); ?>