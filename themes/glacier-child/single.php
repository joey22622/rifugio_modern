<?php

/* ======================= */
/* ::::: Single Post ::::: */
/* ======================= */

get_header(); 
?>

<div class="container">
  <div class="row">
  
	<div class="col-md-9">


		<?php if ( have_posts() ):
								
				while( have_posts() ): the_post();
										
					get_template_part( 'template-parts/blog/classic/content', get_post_format() );
									
					echo glacier_post_navigation();
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
								
				endwhile;
								
			endif; ?>

   		</div>

	<div class="col-md-3 glacier-padding-left">

	    <?php get_sidebar(); ?>

	 </div>

  </div>
</div>

<?php get_footer(); 

?>