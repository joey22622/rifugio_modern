<?php

/* ============================ */
/* ::::::::::: Blog ::::::::::: */
/* ============================ */

$section  = 'blog';
$priority = 10;


// Position button post
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'position_button_post',
	'label'       => esc_html__( 'Button Position', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
	 	'text-align' => 'left',
	),
	'output' => array(
		array(
			'element' => '.post-button',
		),
	),
) );

// Show post date
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'post_date',
	'label'       => esc_html__( 'Show post date', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );

// Show post author
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'post_author',
	'label'       => esc_html__( 'Show post author', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );

// Show post comments
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'post_comments',
	'label'       => esc_html__( 'Show post comments', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );

// Show post categories
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'post_categories',
	'label'       => esc_html__( 'Show post categories', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );

// Show post tags
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'post_tags',
	'label'       => esc_html__( 'Show post tags', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );

// Show social icons post
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'post_social_icons',
	'label'       => esc_html__( 'Show social icons post', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );

