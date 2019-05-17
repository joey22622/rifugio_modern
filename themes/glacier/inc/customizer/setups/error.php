<?php

/* =============================== */
/* :::::::: Error Settings ::::::: */
/* =============================== */

$section  = 'error';
$priority = 1;

// Title
Kirki::add_field( 'glacier', array(
	'type'     => 'text',
	'settings' => 'error_title',
	'label'    => esc_html__( 'Title', 'glacier' ),
	'description' => esc_html__( 'Enter a title for the error page', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> 'ERROR 404',
) );

// Subtitle
Kirki::add_field( 'glacier', array(
	'type'     => 'text',
	'settings' => 'error_subtitle',
	'label'    => esc_html__( 'Subtitle', 'glacier' ),
	'description' => esc_html__( 'Enter a subtitle for the error page', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> 'OOPS! PAGE NOT FOUND!',
) );