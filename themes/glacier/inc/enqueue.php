<?php

/* ====================== */
/* ::::::: FONTS :::::::: */
/* ====================== */

function glacier_fonts_url() {
    $fonts_url = '';
    $fonts = array();
    $subsets = 'latin,latin-ext';
    $fonts[] = 'Dosis:400,600';
    $fonts[] = 'Source Sans Pro:300,400,600';
    if ( $fonts ) {
        $fonts_url = add_query_arg(array(
            'family' => urlencode(implode('|', $fonts) ),
            'subset' => urlencode($subsets),
        ), '//fonts.googleapis.com/css');
    }
    return $fonts_url;
}

/* ====================== */
/* ::::::::: CSS :::::::: */
/* ====================== */

function glacier_load_styles() {

    // Bootstrap 3
    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/plugins/bootstrap.min.css' );

    // Animate
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/plugins/animate.min.css' );

    // SlickNav
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/plugins/slicknav.min.css' );

    // LightCase
    wp_enqueue_style( 'lightcase', get_template_directory_uri() . '/assets/css/plugins/lightcase.css' );

    // Font-Awesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/plugins/font-awesome.css' );

    // Flexslider
    wp_enqueue_style( 'flex-slider', get_template_directory_uri() . '/assets/css/plugins/flexslider.css' );

    if ( class_exists( 'WooCommerce' ) ) :

        // Linea Ecommerce
        wp_enqueue_style( 'lineaicons', get_template_directory_uri() . '/assets/css/plugins/linea.css' );

    endif;

    if ( !class_exists( 'Kirki' ) ) :

         wp_enqueue_style( 'glacier-fonts-url', glacier_fonts_url(), ' ', '1.0' );

    endif;

    // Theme block stylesheet
    wp_enqueue_style( 'glacier-block-style', get_template_directory_uri() . '/assets/css/gutenberg/blocks.css' );

    // Main CSS
    wp_enqueue_style( 'glacier-style', get_template_directory_uri() . '/assets/css/main.css', ' ', '1.0' );
    
}
add_action( 'wp_enqueue_scripts', 'glacier_load_styles' );


/* ====================== */
/* ::::::::: JS ::::::::: */
/* ====================== */

function glacier_load_scripts() {

    // Main JS
    wp_enqueue_script( 'glacier-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );

    // jQuery.appear
    wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), '1.0', true );

    // Lettering
    wp_enqueue_script( 'lettering', get_template_directory_uri() . '/assets/js/lettering.js', array('jquery'), '1.0', true );

    // Textillate
    wp_enqueue_script( 'textillate', get_template_directory_uri() . '/assets/js/textillate.js', array('jquery'), '1.0', true );

    // Wow
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.0', true );

    // Jarallax
    wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/js/jarallax.js', array('jquery'), '1.0', true );

    // Lightcase
    wp_enqueue_script( 'lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array('jquery'), '1.0', true );

    // Sticky
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/sticky.js', array('jquery'), '1.0', true );

    // Images Loaded
    wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/assets/js/images-loaded.js', array('jquery'), '1.0', true );

    // Skills bar
    wp_enqueue_script( 'skillsbar', get_template_directory_uri() . '/assets/js/skills-bar.js', array('jquery'), '1.0', true );

    // Slick Nav
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/slick-nav.js', array('jquery'), '1.0', true );

    // Flex Slider
    wp_enqueue_script( 'flex-slider', get_template_directory_uri() . '/assets/js/flexslider.js', array('jquery'), '1.0', true );

    // Isotope
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), '1.0', true );

    

    // Comment reply
    if ( is_singular() && comments_open() ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'glacier_load_scripts' );


  
