<?php


/* ============================ */
/* :::::::::::: Shop :::::::::: */
/* ============================ */

$section  = 'shop';
$priority = 10;

// Hide/Show Mini Cart
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'cart_shop',
	'label'       => esc_html__( 'Hide/Show Cart', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Show', 'glacier' ),
		'off' => esc_html__( 'Hide', 'glacier' ),
	),
) );

// Color cart
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'color_cart',
	'label'     => esc_html__( 'Color cart', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'output'    => array(
		array(
			'element'  => '.icon-cart i',
			'property' => 'color',
		),
		array(
			'element'  => '.icon-cart span, .cart-widget, .cart-widget .buttons a',
			'property' => 'background',
			'suffix'   => '!important',
		),
		array(
			'element'  => '.cart-widget a.button',
			'property' => 'border-color',
		),
	),
	'active_callback' => array( 
        array(
            'setting'  => 'cart_shop',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Hide/Show Parallax
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'parallax_shop',
	'label'       => esc_html__( 'Hide/Show Parallax', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Show', 'glacier' ),
		'off' => esc_html__( 'Hide', 'glacier' ),
	),
) );

// Parallax
Kirki::add_field( 'glacier', array(
	'type'        => 'image',
	'settings'    => 'parallax_image_shop',
	'label'       => esc_html__( 'Parallax Image Shop', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'http://glacier.mountaintheme.com/wp-content/themes/glacier/assets/img/woo-glacier.jpg',
	'active_callback' => array( 
        array(
            'setting'  => 'parallax_shop',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Title
Kirki::add_field( 'glacier', array(
	'type'     => 'text',
	'settings' => 'parallax_title',
	'label'    => esc_html__( 'Title', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'  => esc_html__( 'Glacier Shop', 'glacier' ),
	'active_callback' => array( 
        array(
            'setting'  => 'parallax_shop',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );


// Effect Text
Kirki::add_field( 'glacier', array(
	'type'        => 'select',
	'settings'    => 'parallax_effect_text',
	'label'       => esc_html__( 'Effect Text', 'glacier' ),
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
            'setting'  => 'parallax_shop',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Sidebar Shop
Kirki::add_field( 'glacier', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'sidebar_shop',
	'label'       => esc_html__( 'Sidebar Shop', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'     => 'right',
	'choices'     => array(
		'left'   => esc_html__( 'Left', 'glacier' ),
		'hide' => esc_html__( 'Hide', 'glacier' ),
		'right'  => esc_html__( 'Right', 'glacier' ),
	),
) );


// Number of products displayed per page
Kirki::add_field( 'glacier', array(
	'type'        => 'number',
	'settings'    => 'number_products_shop',
	'label'       => esc_html__( 'Number of products displayed per page', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'     => 15,
	'choices'     => array(
		'min'  => 0,
		'step' => 1,
	),
) );

// Pagination
Kirki::add_field( 'glacier', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'pagination_shop',
	'label'       => esc_html__( 'Pagination', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'     => 'classic',
	'choices'     => array(
		'classic'   => esc_html__( 'Classic', 'glacier' ),
		'ajax' => esc_html__( 'Ajax', 'glacier' ),
		'hide'  => esc_html__( 'Hide', 'glacier' ),
	),
) );

