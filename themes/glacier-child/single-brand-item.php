<?php
/* ======================= */
/* ::::: Single Post ::::: */
/* ======================= */
$terms = get_terms( 'brand' );
$term = array_pop($terms);
$termlink = get_category_link( $term->term_id);
$termlink = "https://www.google.com";
function redirect_custom_page() {
	if (is_single()) {
		wp_redirect($termlink); exit;
	}
 }
//  redirect_custom_page();
get_header(); 


// if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){

// for ($x = 0; $x <= 1; $x++) {
// } 



			// $terms = get_terms( 'brand' );
			// if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			// 	echo '<ul>';
			// 	foreach ( $terms as $term ) {
			// 		echo '<li><a href="'. get_category_link( $term->term_id ) .'">' . $term->name . '</a></li>';
			// 	}
			// 	echo '</ul>';
			// }
?>

<div class="container">
  <div class="row">
  
	<div class="col-md-9">
	<h1>Hi there!!<?php echo $brand_item_id . $url . $parent_brand; ?></h1>

		<?php if ( have_posts() ):
								
				while( have_posts() ): the_post();
					get_template_part( 'template-parts/blog/classic/content', get_post_format() );
					
					$parent_brand = get_field('parent_brand', $brand_item_id);
					if($parent_brand):
						$post = $parent_brand;
						setup_postdata( $post );
						$url =  the_permalink();
			?>
<span class="parent-brand-link"><?php echo $url?></span>
<?php 
									echo '<ul>';
										echo '<li><a href="'. get_category_link( $term->term_id ) .'">' . $termlink . 'ss</a></li>';

									echo '</ul>';
								
								?>
<?php
										wp_reset_postdata();
										endif;

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