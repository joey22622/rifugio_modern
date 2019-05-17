<?php

/**
 * Infinity functions and definitions
 *
 * @package woocommerce glacier
 */

/* ============================ */
/* :::::::::: Kirki ::::::::::: */
/* ============================ */

if ( class_exists('Kirki') ) : 

require_once get_template_directory() . '/inc/customizer/customizer.php';

endif;

/* =============================== */
/* :::: Woocommerce Support :::::: */
/* =============================== */

function glacier_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'glacier_woocommerce_support' );


/* ========================================= */
/* :::: Update contents AJAX mini-cart ::::: */
/* ========================================= */

function glacier_woocommerce_update_count_mini_cart( $fragments ) {

	ob_start();
	?>

	<span class="cart-count">

		<?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'glacier' ), WC()->cart->get_cart_contents_count() ); ?>
			
	</span> 

	<?php
	
	$fragments['span.cart-count'] = ob_get_clean();

	
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'glacier_woocommerce_update_count_mini_cart' );


function glacier_woocommerce_update_content_mini_cart( $fragments ) {

	ob_start();
	?>

	<div class="cart-widget">
       <?php woocommerce_mini_cart(); ?>
    </div> 

	<?php
	
	$fragments['div.cart-widget'] = ob_get_clean();

	
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'glacier_woocommerce_update_content_mini_cart' );


/* ======================================================= */
/* :::: Change number of products displayed per page ::::: */
/* ======================================================= */

$number_shop = get_theme_mod( 'number_products_shop' );

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return ' . esc_attr($number_shop) . ';' ), 20 );


