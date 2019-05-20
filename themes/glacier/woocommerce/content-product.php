<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}


?>

<article>

    <li <?php post_class(); ?>>

        <?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

        <a href="<?php the_permalink(); ?>" class="product-images">
            <?php $attachment_ids = $product->get_gallery_image_ids(); ?>
            <?php if ($attachment_ids){?>
            <div class="woo_first_image">
                <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
            </div>
            <div class="woo_second_image">
                <?php echo wp_get_attachment_image($attachment_ids[0], 'shop_catalog');?>
            </div>
            <?php }else{?>
            <div class="woo_first_image woo_single_image">
                <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
            </div>
            <?php };?>
         </a>
           
        <div class="woo_product-details">
            <div class="woo_product-details-container">
                <h4 class="woo_product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="clearfix">
                    <?php do_action( 'woocommerce_after_shop_loop_item_title' );?>
                 </div>
                 <div class="woo_add_to_cart_arcvhive">
                    <div class="add_to_cart_arcvhive_holder">
                        <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                    </div>
                 </div>
                 <div class="clearfix"></div>
            </div>
        </div>

    </li>
    
</article>