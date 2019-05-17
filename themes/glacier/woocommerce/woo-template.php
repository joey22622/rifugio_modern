<?php

/* ====================== */
/* ::::: Page Shop :::::: */
/* ====================== */

?>

<?php get_header(); ?>

<?php if ( true == get_theme_mod( 'parallax_shop', false ) ) : ?>

<?php
		 
	$image_parallax = get_theme_mod( 'parallax_image_shop', get_template_directory_uri() . '/assets/img/woo-glacier.jpg' );
	$parallax_title = get_theme_mod( 'parallax_title', 'Glacier Shop' );
	$text_animation_parallax = get_theme_mod( 'parallax_effect_text', 'fadeIn' );

?>

<div class="parallax" style="background-image: url(<?php echo esc_url($image_parallax) ?>)">
        <div class="info">
           <h2 data-in-effect="<?php echo esc_html($text_animation_parallax); ?>"><?php echo esc_html($parallax_title); ?></h2>
        </div>
</div>

<?php endif; ?>

<div class="container">
  <div class="row">


  <?php if ( 'left' == get_theme_mod( 'sidebar_shop' ) ) : ?>

		<div class="col-md-3 glacier-padding-right">

		<?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>

			 <div id="sidebar" class="widget-area" role="complementary">

	         <?php dynamic_sidebar( 'shop-sidebar' ); ?>

	         </div>

	     <?php endif; ?>

		</div>

		<div class="col-md-9">

			<?php woocommerce_content(); ?>

		</div>

	<?php endif; ?>

	<?php if ( 'hide' == get_theme_mod( 'sidebar_shop' ) ) : ?>

		<div class="col-md-12">

			<?php woocommerce_content(); ?>

		</div>

	<?php endif; ?>
 

	<?php if ( 'right' == get_theme_mod( 'sidebar_shop', 'right' ) ) : ?>

	    <div class="col-md-9">

			<?php woocommerce_content(); ?>

		</div>

		<div class="col-md-3 glacier-padding-left">

		<?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>

			 <div id="sidebar" class="widget-area" role="complementary">

	         <?php dynamic_sidebar( 'shop-sidebar' ); ?>

	         </div>

	     <?php endif; ?>

		</div>

	<?php endif; ?>

 </div>
</div>

<?php get_footer(); ?>