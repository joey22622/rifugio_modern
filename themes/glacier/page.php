<?php

/* ====================== */
/* :::::::: Page :::::::: */
/* ====================== */

?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
  
	<div class="col-md-9">

			<?php

				the_title( '<h3 class="entry-header">', '</h3>' );

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