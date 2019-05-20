<?php

/* ============================ */
/* ::::::::: Parallax ::::::::: */
/* ============================ */

$section  = 'parallax';
$priority = 10;

// Parallax height
Kirki::add_field( 'glacier', array(
	'type'     => 'number',
	'settings' => 'parallax_height',
	'label'    => esc_html__( 'Parallax height', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '620',
	'output'    => array(
		array(
			'element'  => '.parallax',
			'property' => 'min-height',
			'units'    => 'px',
		),
	),
) );

// Parallax margin
Kirki::add_field( 'glacier', array(
	'type'     => 'number',
	'settings' => 'parallax_margin',
	'label'    => esc_html__( 'Parallax margin-top', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '-185',
    'output'    => array(
		array(
			'element'  => '.parallax',
			'property' => 'margin-top',
			'units'    => 'px',
		),
	),
) );

// Parallax padding
Kirki::add_field( 'glacier', array(
	'type'     => 'number',
	'settings' => 'parallax_padding',
	'label'    => esc_html__( 'Parallax padding-bottom', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '0',
    'output'    => array(
		array(
			'element'  => '.parallax .info',
			'property' => 'padding-bottom',
			'units'    => 'px',
		),
	),
) );

// Parallax background
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'parallax_bg',
	'label'     => esc_html__( 'Parallax background', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => 'rgba(255, 255, 255, 0.0)',
	'output'    => array(
		array(
			'element'  => '.parallax:before',
			'property' => 'background',
		),
	),
) );

// Parallax typography
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'parallax_typography',
	'label'       => esc_html__( 'Parallax Typography', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'font-family'    => 'Dosis',
		'variant'        => '400',
		'font-size'      => '2.4em',
		'letter-spacing' => '0.40em',
		'text-transform' => 'uppercase',
		'color'          => '#000',
	),
	'output' => array(
		array(
			'element' => '.parallax .info h2',
		),
	),
) );



// Parallax archive and category
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'parallax_archive',
	'label'       => esc_html__( 'Parallax archive and category', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );

// Title archive effect
Kirki::add_field( 'glacier', array(
	'type'        => 'select',
	'settings'    => 'title_archive_effect',
	'label'       => esc_html__( 'Title effect', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'multiple'    => 1,
	'choices'     => array(
		'none' => esc_html__( 'None', 'glacier' ),
		'wow bounce' => esc_html__( 'Bounce', 'glacier' ),
		'wow flash' => esc_html__( 'Flash', 'glacier' ),
		'wow pulse' => esc_html__( 'Pulse', 'glacier' ),
		'wow rubberBand' => esc_html__( 'RubberBand', 'glacier' ),
		'wow shake' => esc_html__( 'Shake', 'glacier' ),
		'wow swing' => esc_html__( 'Swing', 'glacier' ),
		'wow tada' => esc_html__( 'Tada', 'glacier' ),
		'wow wobble' => esc_html__( 'Wobble', 'glacier' ),
		'wow jello' => esc_html__( 'Jello', 'glacier' ),
		'wow bounceIn' => esc_html__( 'BounceIn', 'glacier' ),
		'wow bounceInDown' => esc_html__( 'BounceInDown', 'glacier' ),
		'wow bounceInLeft' => esc_html__( 'BounceInLeft', 'glacier' ),
		'wow bounceInRight' => esc_html__( 'BounceInRight', 'glacier' ),
		'wow bounceInUp' => esc_html__( 'BounceInUp', 'glacier' ),
		'wow bounceOut' => esc_html__( 'BounceOut', 'glacier' ),
		'wow bounceOutDown' => esc_html__( 'BounceOutDown', 'glacier' ),
		'wow bounceOutLeft' => esc_html__( 'BounceOutLeft', 'glacier' ),
		'wow bounceOutRight' => esc_html__( 'BounceOutRight', 'glacier' ),
		'wow bounceOutUp' => esc_html__( 'BounceOutUp', 'glacier' ),
		'wow fadeIn' => esc_html__( 'FadeIn', 'glacier' ),
		'wow fadeInDown' => esc_html__( 'FadeInDown', 'glacier' ),
		'wow fadeInDownBig' => esc_html__( 'FadeInDownBig', 'glacier' ),
		'wow fadeInLeft' => esc_html__( 'FadeInLeft', 'glacier' ),
		'wow fadeInLeftBig' => esc_html__( 'FadeInLeftBig', 'glacier' ),
		'wow fadeInRight' => esc_html__( 'FadeInRight', 'glacier' ),
		'wow fadeInRightBig' => esc_html__( 'FadeInRightBig', 'glacier' ),
		'wow fadeInUp' => esc_html__( 'FadeInUp', 'glacier' ),
		'wow fadeInUpBig' => esc_html__( 'FadeInUpBig', 'glacier' ),
		'wow fadeOut' => esc_html__( 'FadeOut', 'glacier' ),
		'wow fadeOutDown' => esc_html__( 'FadeOutDown', 'glacier' ),
		'wow fadeOutDownBig' => esc_html__( 'FadeOutDownBig', 'glacier' ),
		'wow fadeOutLeft' => esc_html__( 'FadeOutLeft', 'glacier' ),
		'wow fadeOutLeftBig' => esc_html__( 'FadeOutLeftBig', 'glacier' ),
		'wow fadeOutRight' => esc_html__( 'FadeOutRight', 'glacier' ),
		'wow fadeOutRightBig' => esc_html__( 'FadeOutRightBig', 'glacier' ),
		'wow fadeOutUp' => esc_html__( 'FadeOutUp', 'glacier' ),
		'wow fadeOutUpBig' => esc_html__( 'FadeOutUpBig', 'glacier' ),
		'wow flip' => esc_html__( 'Flip', 'glacier' ),
		'wow flipInX' => esc_html__( 'FlipInX', 'glacier' ),
		'wow flipInY' => esc_html__( 'FlipInY', 'glacier' ),
		'wow flipOutX' => esc_html__( 'FlipOutX', 'glacier' ),
		'wow flipOutY' => esc_html__( 'FlipOutY', 'glacier' ),
		'wow lightSpeedIn' => esc_html__( 'LightSpeedIn', 'glacier' ),
		'wow lightSpeedOut' => esc_html__( 'LightSpeedOut', 'glacier' ),
		'wow rotateIn' => esc_html__( 'RotateIn', 'glacier' ),
		'wow rotateInDownLeft' => esc_html__( 'RotateInDownLeft', 'glacier' ),
		'wow rotateInDownRight' => esc_html__( 'RotateInDownRight', 'glacier' ),
		'wow rotateInUpLeft' => esc_html__( 'RotateInUpLeft', 'glacier' ),
		'wow rotateInUpRight' => esc_html__( 'RotateInUpRight', 'glacier' ),
		'wow rotateOut' => esc_html__( 'RotateOut', 'glacier' ),
		'wow rotateOutDownLeft' => esc_html__( 'RotateOutDownLeft', 'glacier' ),
		'wow rotateOutDownRight' => esc_html__( 'RotateOutDownRight', 'glacier' ),
		'wow rotateOutUpLeft' => esc_html__( 'RotateOutUpLeft', 'glacier' ),
		'wow rotateOutUpRight' => esc_html__( 'RotateOutUpRight', 'glacier' ),
		'wow slideInUp' => esc_html__( 'SlideInUp', 'glacier' ),
		'wow slideInDown' => esc_html__( 'SlideInDown', 'glacier' ),
		'wow slideInLeft' => esc_html__( 'SlideInLeft', 'glacier' ),
		'wow slideInRight' => esc_html__( 'SlideInRight', 'glacier' ),
		'wow slideOutUp' => esc_html__( 'SlideOutUp', 'glacier' ),
		'wow slideOutDown' => esc_html__( 'SlideOutDown', 'glacier' ),
		'wow slideOutLeft' => esc_html__( 'SlideOutLeft', 'glacier' ),
		'wow slideOutRight' => esc_html__( 'SlideOutRight', 'glacier' ),
		'wow zoomIn' => esc_html__( 'ZoomIn', 'glacier' ),
		'wow zoomInDown' => esc_html__( 'ZoomInDown', 'glacier' ),
		'wow zoomInLeft' => esc_html__( 'ZoomInLeft', 'glacier' ),
		'wow zoomInRight' => esc_html__( 'ZoomInRight', 'glacier' ),
		'wow zoomInUp' => esc_html__( 'ZoomInUp', 'glacier' ),
		'wow zoomOut' => esc_html__( 'ZoomOut', 'glacier' ),
		'wow zoomOutDown' => esc_html__( 'ZoomOutDown', 'glacier' ),
		'wow zoomOutLeft' => esc_html__( 'ZoomOutLeft', 'glacier' ),
		'wow zoomOutRight' => esc_html__( 'ZoomOutRight', 'glacier' ),
		'wow zoomOutUp' => esc_html__( 'ZoomOutUp', 'glacier' ),
		'wow hinge' => esc_html__( 'Hinge', 'glacier' ),
		'wow rollIn' => esc_html__( 'RollIn', 'glacier' ),
		'wow rollOut' => esc_html__( 'RollOut', 'glacier' ),
	),
	'active_callback' => array( 
         array(
            'setting'  => 'parallax_archive',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Title parallax archive
Kirki::add_field( 'glacier', array(
	'type'        => 'text',
	'settings'    => 'title_parallax_archive',
	'label'    => esc_html__( 'Title parallax', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'glacier',
	'active_callback' => array( 
         array(
            'setting'  => 'parallax_archive',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Image parallax archive
Kirki::add_field( 'glacier', array(
	'type'        => 'image',
	'settings'    => 'url_image_parallax_archive',
	'label'       => esc_html__( 'Image parallax', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'http://glacier.mountaintheme.com/wp-content/themes/glacier/assets/img/woo-glacier.jpg',
	'active_callback' => array( 
        array(
            'setting'  => 'parallax_archive',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Parallax video archive
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'video_parallax_archive',
	'label'       => esc_html__( 'Parallax video', 'glacier' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
	'active_callback' => array( 
         array(
            'setting'  => 'parallax_archive',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Video parallax archive
Kirki::add_field( 'glacier', array(
	'type'        => 'text',
	'settings'    => 'url_video_parallax_archive',
	'label'    => esc_html__( 'Video parallax', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'https://www.youtube.com/watch?v=FZ-QSu9hbRI',
	'active_callback' => array( 
         array(
            'setting'  => 'parallax_archive',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'video_parallax_archive',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );