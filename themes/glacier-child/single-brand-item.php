<?php
/* ======================= */
/* ::::: Single Post ::::: */
/* ======================= */

get_header(); 
$url = "https://www.google.com/";
wp_redirect($url);
exit;


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
?>
<span class="parent-brand-link"><?php echo $url?></span>

<script>

// var url = document.querySelector(".parent-brand-link").value;
// console.log(url);
// window.location.replace(document.querySelector(".parent-brand-link").value);

</script>
<?php
										wp_reset_postdata();
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