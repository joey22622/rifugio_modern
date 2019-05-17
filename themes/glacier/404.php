<?php

/* ====================== */
/* ::::: (404) Page ::::: */
/* ====================== */

?>

<?php get_header(); ?>


<section class="error-404">

		<?php 
			$error_title = ('' != get_theme_mod( 'error_title' )) ? get_theme_mod( 'error_title' ) : esc_html__('ERROR 404', 'glacier');
		 	$error_subtitle = ('' != get_theme_mod( 'error_subtitle' )) ? get_theme_mod( 'error_subtitle' ) : esc_html__('OOPS! PAGE NOT FOUND!', 'glacier');

		?>

		<h1><?php echo esc_html($error_title) ?></h1>
		<p><?php echo esc_html($error_subtitle) ?></p>

</section>


<?php get_footer(); ?>