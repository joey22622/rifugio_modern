<?php

/* ============================ */
/* ::::::::: Parallax ::::::::: */
/* ============================ */

$section  = 'portfolio';
$priority = 10;

// Portfolio typography
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'portfolio_typography',
	'label'       => esc_html__( 'Portfolio Typography', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'font-family'    => 'Dosis',
		'variant'        => '400',
		'font-size'      => '11px',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
	),
	'output' => array(
		array(
			'element' => '.vp-filter__item a, .vp-pagination__item a',
			 'suffix'   => '!important',
		),
	),
) );


