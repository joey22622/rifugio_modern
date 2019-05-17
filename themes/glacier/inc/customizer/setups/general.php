<?php

/* ============================ */
/* :::::::::: General ::::::::: */
/* ============================ */


/* ::::::: Page Loader :::::: */

$section  = 'page_loader';
$priority = 10;


// On/off Page loader
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'page_loader',
	'label'       => esc_html__( 'On/Off', 'glacier' ),
	'section'     => $section,
	'default'     => '1',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );


// Classic or Image Page loader
Kirki::add_field( 'glacier', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'choose_page_loader',
	'label'       => esc_html__( 'Choose page loader', 'glacier' ),
	'section'     => $section,
	'default'     => 'minimal',
	'priority'    => $priority++,
	'choices'     => array(
		'minimal'   => esc_attr__( 'Minimal', 'glacier' ),
		'image' => esc_attr__( 'Image', 'glacier' ),
	),
	'active_callback' => array( 
        array(
            'setting'  => 'page_loader',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );


// Loader
Kirki::add_field( 'glacier', array(
	'type'        => 'image',
	'settings'    => 'image_loader',
	'label'       => esc_html__( 'Loader', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'http://mountain.wp.mountaintheme.com/wp-content/themes/mountain/assets/img/spinner.gif',
	'active_callback' => array( 
        array(
            'setting'  => 'choose_page_loader',
            'operator' => '==',
            'value'    => 'image',
        ),
    ),
) );


// Background color loader
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'bg_color_image_loader',
	'label'     => esc_html__( 'Background color loader', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'output'    => array(
		array(
			'element'  => '.image-page-loader',
			'property' => 'background',
		),
	),
	'active_callback' => array( 
        array(
            'setting'  => 'choose_page_loader',
            'operator' => '==',
            'value'    => 'image',
        ),
    ),
) );

/* ::::::: Menu :::::: */

$section  = 'menu_style';
$priority = 10;

// On/off Header 
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'header_sticky',
	'label'       => esc_html__( 'On/Off Header Sticky', 'glacier' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );

// Header ( Height )
Kirki::add_field( 'glacier', array(
	'type'     => 'text',
	'settings' => 'height_sticky_site',
	'label'    => esc_html__( 'Header height', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '95',
	'output'    => array(
		array(
			'element'  => 'header.sticky',
			'property' => 'height',
			'units'    => 'px',
		),
	),
	'active_callback' => array( 
        array(
            'setting'  => 'header_sticky',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Header padding
Kirki::add_field( 'glacier', array(
	'type'     => 'number',
	'settings' => 'header_sticky_padding_top',
	'label'    => esc_html__( 'Header padding', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '23',
    'output'    => array(
		array(
			'element'  => 'header.sticky',
			'property' => 'padding',
			'units'    => 'px',
		),
	),
	'active_callback' => array( 
        array(
            'setting'  => 'header_sticky',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Color sticky header
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'color_sticky_header',
	'label'     => esc_html__( 'Header background color', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'output'    => array(
		array(
			'element'  => 'header.sticky',
			'property' => 'background',
		),
	),
	'active_callback' => array( 
        array(
            'setting'  => 'header_sticky',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Menu typography
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'menu_typography',
	'label'       => esc_html__( 'Menu Typography', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'font-family'    => 'Dosis',
		'variant'        => '400',
		'font-size'      => '12px',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
		'color'          => '#000',
	),
	'output' => array(
		array(
			'element' => '#glacier_menu > ul > li > a',
		),
	),
) );

// Submenu typography
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'submenu_typography',
	'label'       => esc_html__( 'SubMenu Typography', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'font-family'    => 'Dosis',
		'variant'        => '400',
		'font-size'      => '11px',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
		'color'          => '#fff',
	),
	'output' => array(
		array(
			'element' => '#glacier_menu > ul > li > ul > li a',
		),
	),
) );

// Color border menu
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'menu_border',
	'label'     => esc_html__( 'Color border menu', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'output'    => array(
		array(
			'element'  => '#glacier_menu > ul > li > a:after',
			'property' => 'border-color',
		),
	),
) );

// Color background submenu
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'background_submenu',
	'label'     => esc_html__( 'Color background submenu', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'output'    => array(
		array(
			'element'  => '#glacier_menu ul li > ul',
			'property' => 'background',
		),
	),
) );

// Color text hover submenu
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'color_text_submenu',
	'label'     => esc_html__( 'Color text hover submenu', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'output'    => array(
		array(
			'element'  => '#glacier_menu > ul > li > ul > li a:hover',
			'property' => 'color',
		),
	),
) );


// MobileMenu typography
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'mobile_typography',
	'label'       => esc_html__( 'Mobile Menu Typography', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'font-family'    => 'Dosis',
		'variant'        => '400',
		'font-size'      => '12px',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
		'color'          => '#fff',
	),
	'output' => array(
		array(
			'element' => '.slicknav_menu .slicknav_menutxt, .slicknav_nav ul, .slicknav_nav a, .slicknav_arrow, .slicknav_nav a:hover',
		),
	),
) );

// Color mobile background hover submenu
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'mobile_background_hover_submenu',
	'label'     => esc_html__( 'Color mobile background hover submenu', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'rgba(255, 255, 255, 0.10)',
	'output'    => array(
		array(
			'element'  => '.slicknav_nav .slicknav_row:hover',
			'property' => 'background',
		),
	),
) );

// Color mobile border menu
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'menu_mobile_border',
	'label'     => esc_html__( 'Color mobile border menu', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'output'    => array(
		array(
			'element'  => '.slicknav_menu .slicknav_icon-bar',
			'property' => 'background',
		),
	),
) );

// Color mobile background submenu
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'mobile_background_submenu',
	'label'     => esc_html__( 'Color mobile background submenu', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'output'    => array(
		array(
			'element'  => '.slicknav_btn, .slicknav_nav ul',
			'property' => 'background',
		),
	),
) );

/* ::::::: Additional Settings :::::: */

$section  = 'additional';
$priority = 10;

// On/off Logo header
Kirki::add_field( 'glacier', array(
	'type'        => 'switch',
	'settings'    => 'logo_header',
	'label'       => esc_html__( 'Logo', 'glacier' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => $priority++,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'glacier' ),
		'off' => esc_html__( 'Disable', 'glacier' ),
	),
) );

// Logo Site
Kirki::add_field( 'glacier', array(
	'type'        => 'image',
	'settings'    => 'image_site',
	'label'       => esc_html__( 'Logo Header', 'glacier' ),
	'description' => esc_html__( 'Choose a logo for the page of template', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'http://glacier.mountaintheme.com/wp-content/themes/glacier/assets/img/logo.png',
	'active_callback' => array( 
        array(
            'setting'  => 'logo_header',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Logo Header ( Height )
Kirki::add_field( 'glacier', array(
	'type'     => 'text',
	'settings' => 'height_img_site',
	'label'    => esc_html__( 'Logo height', 'glacier' ),
	'description' => esc_html__( 'Enter logo height', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '131px',
	'active_callback' => array( 
        array(
            'setting'  => 'logo_header',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Logo Header ( Width )
Kirki::add_field( 'glacier', array(
	'type'     => 'text',
	'settings' => 'width_img_site',
	'label'    => esc_html__( 'Logo width', 'glacier' ),
	'description' => esc_html__( 'Enter logo width', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '150px',
	'active_callback' => array( 
        array(
            'setting'  => 'logo_header',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// Logo margin-top
Kirki::add_field( 'glacier', array(
	'type'     => 'number',
	'settings' => 'logo_padding_top',
	'label'    => esc_html__( 'Logo margin-top', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '0',
    'output'    => array(
		array(
			'element'  => 'header .logo',
			'property' => 'margin-top',
			'units'    => 'px',
		),
	),
	'active_callback' => array( 
        array(
            'setting'  => 'logo_header',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );



// Logo typography
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'logo_typography',
	'label'       => esc_html__( 'Logo Typography', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'font-family'    => 'Dosis',
		'variant'        => '600',
		'font-size'      => '17px',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
		'color'          => '#000',
	),
	'output' => array(
		array(
			'element' => 'header .logo a',
		),
	),
	'active_callback' => array( 
        array(
            'setting'  => 'logo_header',
            'operator' => '==',
            'value'    => false,
        ),
    ),
) );

// Authorization logo
Kirki::add_field( 'glacier', array(
	'type'        => 'image',
	'settings'    => 'image_admin',
	'label'       => esc_html__( 'Authorization logo', 'glacier' ),
	'description' => esc_html__( 'Choose a logo for the page of authorization', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'http://glacier.mountaintheme.com/wp-content/themes/glacier/assets/img/logo.png',
) );

// Authorization logo ( Height )
Kirki::add_field( 'glacier', array(
	'type'     => 'text',
	'settings' => 'height_img_admin',
	'label'    => esc_html__( 'Logo height', 'glacier' ),
	'description' => esc_html__( 'Enter logo height', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '131px'
) );

// Authorization logo ( Width )
Kirki::add_field( 'glacier', array(
	'type'     => 'text',
	'settings' => 'width_img_admin',
	'label'    => esc_html__( 'Logo width', 'glacier' ),
	'description' => esc_html__( 'Enter logo width', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'	=> '150px'
) );

// Style color
Kirki::add_field( 'glacier', array(
	'type'      => 'color-alpha',
	'settings'   => 'style_color',
	'label'     => esc_html__( 'Style color', 'glacier' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'output'    => array(
		array(
			'element'  => '.woocommerce span.onsale, .woocommerce .cart_item a.remove:hover, .widget .mini_cart_item a.remove:hover, .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .pagination  span.current, .vp-pagination__style-default .vp-pagination__item>*, .single-navigation .prev-button a, .single-navigation .next-button a, .post-button a, .load-more a, .post-navigation .prev-button a, .post-navigation .next-button a, #comments input[type=\'submit\'], .contact-form input[type=\'submit\'], .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt',
			'property' => 'background-color',
			'suffix'   => '!important',
		),
		array(
			'element'  => '.woocommerce .star-rating:before, .woocommerce .star-rating span, .woocommerce p.stars a, .woocommerce ul.products li.product h3',
			'property' => 'color',
			'suffix'   => '!important',
		),
	),
) );


/* ::::::: General typography :::::: */

$section  = 'general_typography';
$priority = 10;


// Body typography
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'body_typography',
	'label'       => esc_html__( 'Body Typography', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'font-family'    => 'Source Sans Pro',
		'variant'        => '300',
		'letter-spacing' => '0',
		'text-transform' => 'none',
		'font-size' 	 => '15px',
		'color'			 => '#000',
	),
	'output' => array(
		array(
			'element' => 'body',
		),
	),
) );

// Headings typography
Kirki::add_field( 'glacier', array(
	'type'        => 'typography',
	'settings'    => 'headings_typography',
	'label'       => esc_html__( 'Headings Typography', 'glacier' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'font-family'    => 'Dosis',
		'variant'        => '600',
		'letter-spacing' => '2',
		'text-transform' => 'uppercase',
		'color'			 => '#000',
	),
	'output' => array(
		array(
			'element' => 'h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6',
		),
	),
) );



/* ::::::: Typekit Settings :::::: */

$section  = 'typekit_settings';
$priority = 10;

Kirki::add_field('glacier', array(
    'type' => 'switch',
    'settings' => 'enable_typekit',
    'label' => esc_html__('Enable Typekit', 'glacier') ,
    'section' => 'typekit_settings',
    'default' => '0',
    'priority' => $priority++,
    'transport' => 'auto',
    'choices' => array(
        'on'  => esc_html__('Enable', 'glacier'),
        'off' => esc_html__('Disable', 'glacier')
    )
));

Kirki::add_field('glacier', array(
    'type' => 'text',
    'settings' => 'typekit_id',
    'label' => esc_html__('Typekit ID', 'glacier') ,
    'section' => 'typekit_settings',
    'default' => 'fyf1uam',
    'priority' => $priority++,
    'transport' => 'auto',
    'required' => array(
        array(
            'setting' => 'enable_typekit',
            'operator' => '==',
            'value' => '1',
        )
    ) ,
));
Kirki::add_field('glacier', array(
    'type' => 'repeater',
    'label' => esc_html__('Typekit Fonts', 'glacier') ,
    'description' => esc_html__('Here you can add typekit fonts', 'glacier') ,
    'settings' => 'typekit_fonts',
    'priority' => $priority++,
    'transport' => 'auto',
    'section' => 'typekit_settings',
    'row_label' => array(
        'type' => 'text',
        'value' => esc_html__('Typekit Font', 'glacier') ,
    ),
    'default' => array(
        array(
            'font_name' => 'Sofia Pro',
            'font_css_name' => 'sofia-pro',
            'font_fallback' => 'sans-serif',
            'font_subsets' => 'cyrillic',
            'font_variants' => array('300', '300italic', 'regular', 'italic', '500', '700')
        ),
    ),
    'fields' => array(
        'font_name' => array(
            'type' => 'text',
            'label' => esc_html__('Name', 'glacier') ,
        ) ,
        'font_css_name' => array(
            'type' => 'text',
            'label' => esc_html__('CSS Name', 'glacier') ,
        ) ,
        'font_variants' => array(
            'type' => 'select',
            'label' => esc_html__('Variants', 'glacier') ,
            'multiple' => 18,
            'choices' => array(
                '100' => esc_html__('100', 'glacier') ,
                '100italic' => esc_html__('100italic', 'glacier') ,
                '200' => esc_html__('200', 'glacier') ,
                '200italic' => esc_html__('200italic', 'glacier') ,
                '300' => esc_html__('300', 'glacier') ,
                '300italic' => esc_html__('300italic', 'glacier') ,
                'regular' => esc_html__('regular', 'glacier') ,
                'italic' => esc_html__('italic', 'glacier') ,
                '500' => esc_html__('500', 'glacier') ,
                '500italic' => esc_html__('500italic', 'glacier') ,
                '600' => esc_html__('600', 'glacier') ,
                '600italic' => esc_html__('600italic', 'glacier') ,
                '700' => esc_html__('700', 'glacier') ,
                '700italic' => esc_html__('700italic', 'glacier') ,
                '800' => esc_html__('800', 'glacier') ,
                '800italic' => esc_html__('800italic', 'glacier') ,
                '900' => esc_html__('900', 'glacier') ,
                '900italic' => esc_html__('900italic', 'glacier') ,
            )
        ),
        'font_fallback' => array(
            'type' => 'select',
            'label' => esc_html__('Fallback', 'glacier') ,
            'choices' => array(
                'sans-serif' => esc_html__('Helvetica, Arial, sans-serif', 'glacier') ,
                'serif' => esc_html__('Georgia, serif', 'glacier') ,
                'display' => esc_html__('"Comic Sans MS", cursive, sans-serif', 'glacier') ,
                'handwriting' => esc_html__('"Comic Sans MS", cursive, sans-serif', 'glacier') ,
                'monospace' => esc_html__('"Lucida Console", Monaco, monospace', 'glacier') ,
            )
        ) ,
        'font_subsets' => array(
            'type' => 'select',
            'label' => esc_html__('Subsets', 'glacier') ,
            'multiple' => 7,
            'choices' => array(
                'cyrillic' => esc_html__('Cyrillic', 'glacier') ,
                'cyrillic-ext' => esc_html__('Cyrillic Extended', 'glacier') ,
                'devanagari' => esc_html__('Devanagari', 'glacier') ,
                'greek' => esc_html__('Greek', 'glacier') ,
                'greek-ext' => esc_html__('Greek Extended', 'glacier') ,
                'khmer' => esc_html__('Khmer', 'glacier') ,
                'latin' => esc_html__('Latin', 'glacier') ,
            )
        ) ,
    ) ,
    'active_callback' => array(
        array(
            'setting' => 'enable_typekit',
            'operator' => '==',
            'value' => '1'
        )
    )
));