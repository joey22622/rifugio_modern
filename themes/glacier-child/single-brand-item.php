<?php
/* ======================= */
/* ::::: Single Post ::::: */
/* ======================= */

get_header(); 
// $location = "https://google.com";
// wp_redirect($location, 302);
// // exit;
?>

<div class="container">
  <div class="row">
  
	<div class="col-md-9">
			<h1>Hi there!!</h1>
		<?php if ( have_posts() ):
								
				while( have_posts() ): the_post();
					
					get_template_part( 'template-parts/blog/classic/content', get_post_format() );
					
					$parent_brand = get_field('parent_brand');
					if($parent_brand):
						$post = $parent_brand;
						setup_postdata( $post );
						$url =  the_permalink();
						wp_redirect( $url );

						wp_reset_postdata();

?>

<?php
					endif;
					wp_redirect( home_url() ); exit;

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

<?php get_footer(); ?>