<?php


/* ============================ */
/* ::::::::::: Footer ::::::::: */
/* ============================ */

$section  = 'footer';
$priority = 10;

// Variants Footer
Kirki::add_field( 'glacier', array(
	'type'        => 'radio',
	'settings'    => 'variants_footer',
	'label'       => esc_html__( 'Variants Footer', 'glacier' ),
	'description' => esc_html__('After activation "Widgets" in admin panel are will be accessed.', 'glacier'),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'     => 'minimal',
	'choices'     => array(
		'minimal'   => esc_html__( 'Minimal', 'glacier' ),
		'widgets' => esc_html__( 'Widgets', 'glacier' ),
	),
) );

// Column footer
Kirki::add_field( 'glacier', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'column_footer',
	'label'       => esc_html__( 'Columns', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'     => 'col-md-flex-12 col-md-flex-4',
	'choices'     => array(
		'col-md-flex-12'   => esc_html__( '1', 'glacier' ),
		'col-md-flex-12 col-md-flex-6'   => esc_html__( '2', 'glacier' ),
		'col-md-flex-12 col-md-flex-4' => esc_html__( '3', 'glacier' ),
		'col-md-flex-12 col-md-flex-3'  => esc_html__( '4', 'glacier' ),
	),
	'active_callback'    => array(
	 array(
		'setting'  => 'variants_footer',
		'operator' => '==',
		'value'    => 'widgets',
	),
),
) );

// Footer background
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'footer_bg',
	'label'     => esc_html__( 'Footer background', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#f8f8f8',
	'output'    => array(
		array(
			'element'  => '.footer',
			'property' => 'background-color',
		),
	),
	'active_callback'    => array(
	 array(
		'setting'  => 'variants_footer',
		'operator' => '==',
		'value'    => 'minimal',
	),
),
) );


// Color hover social link
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'footer_color_hover_link',
	'label'     => esc_html__( 'Color hover social link', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'output'    => array(
		array(
			'element'  => '.footer .social-icons li a:hover',
			'property' => 'color',
			'suffix'   => '!important',
		),
	),
	'active_callback'    => array(
	 array(
		'setting'  => 'variants_footer',
		'operator' => '==',
		'value'    => 'minimal',
	),
),
) );

// Color text footer
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'footer_color_text',
	'label'     => esc_html__( 'Color text footer', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'rgb(0, 0, 0)',
	'output'    => array(
		array(
			'element'  => '.footer .copyright',
			'property' => 'color',
		),
		array(
			'element'  => '.footer a',
			'property' => 'color',
		),
	),
	'active_callback'    => array(
	 array(
		'setting'  => 'variants_footer',
		'operator' => '==',
		'value'    => 'minimal',
	),
),
) );

// Color hover link footer
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'footer_color_link',
	'label'     => esc_html__( 'Color hover link footer', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'output'    => array(
		array(
			'element'  => '.footer a:hover',
			'property' => 'color',
		),
		array(
			'element'  => '.footer a:focus',
			'property' => 'color',
		),
	),
	'active_callback'    => array(
	 array(
		'setting'  => 'variants_footer',
		'operator' => '==',
		'value'    => 'minimal',
	),
),
) );


// Social Icons
Kirki::add_field( 'glacier', array(
	'type'        => 'textarea',
	'settings'    => 'editor_social_icons',
	'label'    => esc_html__( 'Social icons', 'glacier' ),
	'description' => esc_html__( 'Enter your social icons', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '<li><a href="#">TWITTER</a></li>
<li><a href="#">FACEBOOK</a></li>
<li><a href="#">BEHANCE</a></li>
<li><a href="#">PINTEREST</a></li>
<li><a href="#">DRIBBBLE</a></li>',
	'active_callback'    => array(
	 array(
		'setting'  => 'variants_footer',
		'operator' => '==',
		'value'    => 'minimal',
	),
),
) );

// Social Icons typography
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'social_icons_typography',
	'label'       => esc_html__( 'Social Icons Typography', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'font-family'    => 'Dosis',
		'variant'        => '400',
		'font-size'      => '12px',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
		'color'			 => '#000',
	),
	'output' => array(
		array(
			'element' => '.footer .social-icons li a',
			'suffix'   => '!important',
		),
	),
	'active_callback'    => array(
	 array(
		'setting'  => 'variants_footer',
		'operator' => '==',
		'value'    => 'minimal',
	),
),
) );

// Copyright
Kirki::add_field( 'glacier', array(
	'type'        => 'textarea',
	'settings'    => 'editor_copyright',
	'label'    => esc_html__( 'Copyright', 'glacier' ),
	'description' => esc_html__( 'Enter your copyright', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'Copyright © 2017 by <a href="http://themeforest.net/user/MountainTheme?ref=MountainTheme" target="_blank"> MountainTheme</a>. All rights reserved.',
	'active_callback'    => array(
	 array(
		'setting'  => 'variants_footer',
		'operator' => '==',
		'value'    => 'minimal',
	),
),
) );
