<?php
/**
 * Theme functions and definitions.
 * This child theme was generated by Merlin WP.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/*
 * If your child theme has more than one .css file (eg. ie.css, style.css, main.css) then
 * you will have to make sure to maintain all of the parent theme dependencies.
 *
 * Make sure you're using the correct handle for loading the parent theme's styles.
 * Failure to use the proper tag will result in a CSS file needlessly being loaded twice.
 * This will usually not affect the site appearance, but it's inefficient and extends your page's loading time.
 *
 * @link https://codex.wordpress.org/Child_Themes
 */
function glacier_child_enqueue_styles() {
    wp_enqueue_style( 'glacier-style' , get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'glacier-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'glacier-style' ),
        wp_get_theme()->get('Version')
    );
}
function custom_post_type() {
	
	$labels = array(
		'name' => 'Brands',
		'singular_name' => 'Brand',
		'add_new' => 'New Brand',
		'all_items' => 'All Brands',
		'add_new_item' => 'New Brand',
		'edit_item' => 'Edit Brand',
		'new_item' => 'New Brand',
		'view_item' => 'View Brand',
		'search_item' => 'Search Brands',
		'not_found' => 'No brands found',
		'not_found_in_trash' => 'No brands found in trash',
		'parent_item' => 'Parent Brand',
		
	);
		
	
	 $brand_args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'query_var'          => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 4,
			'menu_icon'          => 'dashicons-store',
			'supports'           => array( 'title', 'author', 'editor', 'post-formats'),
			'taxonomies'         => array( 'category', 'post_tag' )
	);
		
    register_post_type('brand',$brand_args);
    
    $labels = array(
		'name' => 'Brand Items',
		'singular_name' => 'Brand Item',
		'add_new' => 'New Brand Item',
		'all_items' => 'All Brand Items',
		'add_new_item' => 'New Brand Item',
		'edit_item' => 'Edit Brand Item',
		'new_item' => 'New Brand Item',
		'view_item' => 'View Brand Item',
		'search_item' => 'Search Brand Items',
		'not_found' => 'No brand items found',
		'not_found_in_trash' => 'No brand items found in trash',
		'parent_item' => 'Parent Brand Item',
		
	);
		
	
	 $brand_item_args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'query_var'          => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-images-alt',
			'supports'           => array( 'title', 'author', 'thumbnail', 'post-formats'),
			'taxonomies'         => array( 'category', 'post_tag' )
	);
		
	register_post_type('brand-item',$brand_item_args);
}

add_action('init',custom_post_type);

function my_rewrite_flush() {

	custom_post_type();
	
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );



add_action(  'wp_enqueue_scripts', 'glacier_child_enqueue_styles' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}