<?php

/* ============================ */
/* ::::: Kirki Customizer ::::: */
/* ============================ */

Kirki::add_config( 'glacier', array(
	'option_type'   => 'theme_mod',
	'capability'    => 'edit_theme_options',
) );


/* ============================ */
/* :::::::: Add Panels :::::::: */
/* ============================ */

$priority = 10;

// General
Kirki::add_panel( 'general', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'General Settings', 'glacier' ),
) );


/* ============================ */
/* ::::::: Add Sections ::::::: */
/* ============================ */

/* ::::::: General :::::: */

$priority = 10;

// Page loader
Kirki::add_section( 'page_loader', array(
	'title'      => esc_html__( 'Page Loader', 'glacier' ),
	'capability'    => 'edit_theme_options',
	'panel'       => 'general',
	'priority'   => $priority ++,
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Menu
Kirki::add_section( 'menu_style', array(
	'title'      => esc_html__( 'Menu Style', 'glacier' ),
	'panel'       => 'general',
	'priority'   => $priority ++,
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


// Additional Settings
Kirki::add_section( 'additional', array(
	'title'       => esc_html__( 'Additional Settings', 'glacier' ),
	'panel'       => 'general',
	'priority'    => $priority ++,
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// General Typography
Kirki::add_section( 'general_typography', array(
	'title'       => esc_html__( 'Typography', 'glacier' ),
	'panel'       => 'general',
	'priority'    => $priority ++,
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Typekit Settings
Kirki::add_section( 'typekit_settings', array(
	'title'       => esc_html__( 'Typekit Settings', 'glacier' ),
	'panel'       => 'general',
	'priority'    => $priority ++,
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


/* :::::::: Blog :::::::: */

$priority = 10;

Kirki::add_section( 'blog', array(
	'title'       => esc_html__( 'Blog Settings', 'glacier' ),
	'panel'       => '',
	'priority'    => $priority ++,
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

/* :::::: Parallax :::::: */

$priority = 10;

Kirki::add_section( 'parallax', array(
	'title'       => esc_html__( 'Parallax Settings', 'glacier' ),
	'panel'       => '',
	'priority'    => $priority ++,
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

/* :::::: Portfolio :::::: */

$priority = 10;

Kirki::add_section( 'portfolio', array(
	'title'       => esc_html__( 'Portfolio Settings', 'glacier' ),
	'panel'       => '',
	'priority'    => $priority ++,
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

/* ::::::: Footer :::::::: */

$priority = 10;

Kirki::add_section( 'footer', array(
	'title'       => esc_html__( 'Footer Settings', 'glacier' ),
	'panel'       => '',
	'priority'    => $priority ++,
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

/* ::::::: Shop :::::::: */

if ( class_exists( 'WooCommerce' ) ) :

	$priority = 10;

	Kirki::add_section( 'shop', array(
		'title'       => esc_html__( 'Shop Settings', 'glacier' ),
		'panel'       => '',
		'priority'    => $priority ++,
		'capability'     => 'edit_theme_options',
	    'theme_supports' => '', // Rarely needed.
	) );

endif;


/* ::::::::: Error ::::::::: */

$priority = 10;

Kirki::add_section( 'error', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Error Settings', 'glacier' ),
	'panel'          => '', // Not typically needed.
	'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


/* ============================ */
/* ::::::::: General :::::::::: */
/* ============================ */

require get_template_directory() . '/inc/customizer/setups/general.php';

/* ============================ */
/* ::::::::::: Blog ::::::::::: */
/* ============================ */

require get_template_directory() . '/inc/customizer/setups/blog.php';

/* ============================ */
/* :::::::: Parallax :::::::::: */
/* ============================ */

require get_template_directory() . '/inc/customizer/setups/parallax.php';

/* ============================ */
/* :::::::: Portfolio ::::::::: */
/* ============================ */

require get_template_directory() . '/inc/customizer/setups/portfolio.php';

/* ============================ */
/* :::::::::: Footer :::::::::: */
/* ============================ */

require get_template_directory() . '/inc/customizer/setups/footer.php';

/* ============================ */
/* ::::::::::: Shop ::::::::::: */
/* ============================ */

require get_template_directory() . '/inc/customizer/setups/shop.php';

/* ============================ */
/* ::::::::::: Error :::::::::: */
/* ============================ */

require get_template_directory() . '/inc/customizer/setups/error.php';

