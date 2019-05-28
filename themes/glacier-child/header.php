<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
    <?php wp_head(); ?>

</head>


 <body <?php body_class(); ?>>


<?php if ( true == get_theme_mod( 'page_loader', true ) ) : ?>

  <?php if ( 'minimal' == get_theme_mod( 'choose_page_loader', 'minimal' ) ) : ?>

      <!-- LOADER TEMPLATE -->
      <div class="minimal-page-loader"></div>
      <!-- /LOADER TEMPLATE -->

  <?php endif; ?>

  <?php if ( 'image' == get_theme_mod( 'choose_page_loader' ) ) : 

    $image_loader = get_theme_mod( 'image_loader', get_template_directory_uri() . '/assets/img/spinner.gif' );

  ?>

    <!-- LOADER TEMPLATE -->
    <div class="image-page-loader">
        <div class="loader-icon"><img src="<?php echo esc_url($image_loader); ?>" alt=""></div>
    </div>
    <!-- /LOADER TEMPLATE -->

  <?php endif; ?>

<?php endif; ?>


<header <?php if ( true == get_theme_mod( 'header_sticky', false ) ) : ?> class="sticky" <?php endif; ?> >
  <div class="container-fluid">
    <div class="row">
      <div class="header-wrap">
        <div class="logo-gradient">
      <?php $logo = get_field('header_logo', 'option'); 
      if($logo):
       ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="logo-wrap"> 
      <?php echo $logo ?>
        </div>
      </a>
      <!-- logo-wrap -->

       <?php
      else:
      ?>
  



       <?php if ( true == get_theme_mod( 'logo_header' ) ) : ?>

           <?php 
         
            $image_site = get_theme_mod( 'image_site' );
            $width_img_site = get_theme_mod( 'width_img_site' );
            $height_img_site = get_theme_mod( 'height_img_site' );

          ?>

             <!-- LOGO -->
             <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img width="<?php echo esc_attr($width_img_site); ?>" height="<?php echo esc_attr($height_img_site); ?>" src="<?php echo esc_url($image_site); ?>"></a></div>
             <!-- END LOGO -->

       <?php endif; ?>

       <?php if ( false == get_theme_mod( 'logo_header', false ) ) : ?>

         <!-- LOGO -->
         <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_attr( get_bloginfo("name") ); ?></a></div>
         <!-- END LOGO -->

       <?php 
       endif; 
      endif;
       
      ?>
      </div><!-- /.logo-gradient -->


           <?php if ( class_exists( 'WooCommerce' ) ) : ?>

             <?php if ( true == get_theme_mod( 'cart_shop', true ) ) : ?>

              <!-- WOOCOMMERCE CART -->
              <div class="cart-container">
                <div class="icon-cart">
                  <i class="icon-ecommerce-bag"></i>
                  <span class="cart-count"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'glacier' ), WC()->cart->get_cart_contents_count() ); ?></span> 
                </div>
                <div class="cart-widget">
                    <?php woocommerce_mini_cart(); ?>
                </div>
              </div>
              <!-- END WOOCOMMERCE CART -->

             <?php endif; ?>

            <?php endif; ?>


            <!-- NAVIGATION -->
            <nav class="main-navigation">
            <div class="hamburger-wrap">
              <button class="hamburger">
                <div class="burger-line"></div>
                <div class="burger-line"></div>
              </button> <!-- /.hamburger -->
            </div>
              <div class="menu-wrap">
            <?php

                wp_nav_menu(
                  array (
                    'theme_location' => 'primary-menu',
                    'class' => '',
                    'container_id' => 'glacier_menu',
                    'walker' => new Glacier_Menu_Walker()
                    )
                  );
  
  ?>

              </div>
              <!-- /.menu-wrap -->
            </nav>
            <!-- END NAVIGATION -->

        </div>
     </div>
  </div>
</header>

<!-- WRAPPER -->    
<div id="wrapper">