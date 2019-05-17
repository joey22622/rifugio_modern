<?php

/**
* Add support for Gutenberg.
*
* @link https://wordpress.org/gutenberg/handbook/reference/theme-support/
*/

function glacier_setup_theme_supported_features() {

		/*
		* This theme styles the visual editor to resemble the theme style,
		* specifically font, colors, icons, and column width.
		*/
		add_editor_style( array( '/assets/css/gutenberg/editor-style.css', glacier_fonts_url() ) );

		// Load regular editor styles into the new block-based editor.
		add_theme_support( 'editor-styles' );

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for wide alignment
		add_theme_support( 'align-wide' );

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Dark Gray', 'glacier' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'glacier' ),
					'slug'  => 'light-gray',
					'color' => '#f1f1f1',
				),
				array(
					'name'  => __( 'White', 'glacier' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
				array(
					'name'  => __( 'Yellow', 'glacier' ),
					'slug'  => 'yellow',
					'color' => '#f4ca16',
				),
				array(
					'name'  => __( 'Dark Brown', 'glacier' ),
					'slug'  => 'dark-brown',
					'color' => '#352712',
				),
				array(
					'name'  => __( 'Medium Pink', 'glacier' ),
					'slug'  => 'medium-pink',
					'color' => '#e53b51',
				),
				array(
					'name'  => __( 'Light Pink', 'glacier' ),
					'slug'  => 'light-pink',
					'color' => '#ffe5d1',
				),
				array(
					'name'  => __( 'Dark Purple', 'glacier' ),
					'slug'  => 'dark-purple',
					'color' => '#2e2256',
				),
				array(
					'name'  => __( 'Purple', 'glacier' ),
					'slug'  => 'purple',
					'color' => '#674970',
				),
				array(
					'name'  => __( 'Blue Gray', 'glacier' ),
					'slug'  => 'blue-gray',
					'color' => '#22313f',
				),
				array(
					'name'  => __( 'Bright Blue', 'glacier' ),
					'slug'  => 'bright-blue',
					'color' => '#55c3dc',
				),
				array(
					'name'  => __( 'Light Blue', 'glacier' ),
					'slug'  => 'light-blue',
					'color' => '#e9f2f9',
				),
			)
		);
}

add_action( 'after_setup_theme', 'glacier_setup_theme_supported_features' );

/*
* Enqueue styles for the block-based editor.
*/

function glacier_block_editor_styles() {

	// Block styles.
	wp_enqueue_style( 'glacier-block-editor-style', get_template_directory_uri() . '/assets/css/gutenberg/editor-blocks.css' );

	// Add custom fonts.
	wp_enqueue_style( 'glacier-fonts', glacier_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'glacier_block_editor_styles' );