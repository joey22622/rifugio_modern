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

<?php endif; 
$logoHidden;
if(is_front_page()):
	$logoHidden = "logo-hidden";
endif;
?>


<header <?php if ( true == get_theme_mod( 'header_sticky', false ) ) : ?> class="sticky" <?php endif; ?> >
  <div class="container-fluid">
    <div class="row">
      <div class="header-wrap">
        <div class="logo-gradient <?php echo $logoHidden?>">
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
       <?php
            if(is_tax('brand')):
              $term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
              ?>
      <div class="brand-head-wrap">
            <h1 class="brand-head">
                <?php echo $term->name; ?>
            </h1>
            <!-- /.brand-head -->
      </div>
      <!-- /.brand-head-wrap -->
              <?php
            endif;
              ?>
      </div><!-- /.logo-gradient -->

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