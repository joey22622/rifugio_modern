<?php

/**
 * Infinity functions and definitions
 *
 * @package glacier
 */


if ( ! function_exists( 'glacier_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function glacier_setup() {

	/*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on component_s, use a find and replace
	* to change 'component_s' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'glacier', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support( 'title-tag' );

	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
			'primary-menu' => esc_html__( 'Menu', 'glacier' ),
	) );

	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	/*
	* Enable support for Post Formats.
	* See https://codex.wordpress.org/Post_Formats
	*/
	if ( class_exists('acf') ) : 

	add_theme_support( 'post-formats', array(
		'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat',
	) );

	endif;

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
}
endif; // component_s_setup
add_action( 'after_setup_theme', 'glacier_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * ===========================================================================
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function glacier_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'glacier_content_width', 1170 );

}
add_action( 'after_setup_theme', 'glacier_content_width');


/* =============================== */
/* :::: Register widget areas :::: */
/* =============================== */

function glacier_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'glacier' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Main sidebar that appears on the right.', 'glacier' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="glacier-widget-title">',
		'after_title'   => '</h1>',
	) );

	if ( 'widgets' == get_theme_mod( 'variants_footer' ) ) : 

		$column_footer = get_theme_mod( 'column_footer', 'col-md-flex-12 col-md-flex-4' );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer', 'glacier' ),
			'id'            => 'footer-sidebar',
			'description'   => esc_html__( 'Widgets that appears on the footer.', 'glacier' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s ' . $column_footer . '">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="glacier-widget-title">',
			'after_title'   => '</h1>',
		) );

	endif;

	if ( class_exists( 'WooCommerce' ) ) :

		register_sidebar( array(
			'name'          => esc_html__( 'Shop Sidebar', 'glacier' ),
			'id'            => 'shop-sidebar',
			'description'   => esc_html__( 'Sidebar that appears on the shop.', 'glacier' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="glacier-widget-title">',
			'after_title'   => '</h1>',
		) );

	endif;


}
add_action( 'widgets_init', 'glacier_widgets_init' );


/* =============================== */
/* ::: Personal logo and link :::: */
/* =============================== */

function glacier_edit_admin_logo() {

	$image_admin = get_theme_mod( 'image_admin', get_template_directory_uri() . '/assets/img/logo.png' );
	$width_img_admin = get_theme_mod( 'width_img_admin', '150px' );
	$height_img_admin = get_theme_mod( 'height_img_admin', '131px' );

	echo '<style type="text/css">
	.login h1 a {
	background: transparent url(' . esc_url($image_admin) . ') 50% 50% no-repeat!important;
	width:' . esc_attr($width_img_admin) . '!important;
	height: ' . esc_attr($height_img_admin) . '!important; 
	}
	.login h1 a:focus {
	box-shadow: none; 
	}
	</style>';

}
add_action( 'login_enqueue_scripts', 'glacier_edit_admin_logo' );


function glacier_edit_admin_logo_link() {

	return home_url('/');

}
add_filter('login_headerurl', 'glacier_edit_admin_logo_link');


/* ============================================ */
/* ::: Remove in admin panel update notice :::: */
/* ============================================ */

function glacier_remove_bsf_info_box() {

        wp_add_inline_style( 'wp-admin', '.bsf-update-nag, .vc_license-activation-notice, .rs-update-notice-wrap {
           display: none;
        }' ); 

}
add_action( 'admin_enqueue_scripts', 'glacier_remove_bsf_info_box' );

/* =============================== */
/* ::::::: Post navigation ::::::: */
/* =============================== */

function glacier_post_navigation() {
	
	$nav = '<div class="post-navigation">';

	$prev_post = get_previous_post();

	if (!empty( $prev_post )): 
	$prev = get_previous_post_link( '<a href="' . get_permalink( $prev_post->ID ) . '" class="post-link-nav">' . esc_html__('Next post', 'glacier') . '<i class="fa fa-angle-right"></i></a>' );
	$nav .= '<div class="next-button">' . $prev . '</div>';
	endif;

	$next_post = get_next_post();

	if (!empty( $next_post )): 
	$next = get_next_post_link( '<a href="' . get_permalink( $next_post->ID ) . '" class="post-link-nav"><i class="fa fa-angle-left"></i>' . esc_html__('Prev post', 'glacier') . '</a>' );
	$nav .= '<div class="prev-button">' . $next . '</div>';
	endif;
	
	$nav .= '</div>';
	
	return $nav;
	
}

/* =========================================== */
/* ::::::: Single portfolio navigation ::::::: */
/* =========================================== */

function glacier_single_navigation() {
	
	$nav = '<div class="single-navigation">';

	$prev_project = get_previous_post();

	if (!empty( $prev_project )): 
	$prev = get_previous_post_link( '<a href="' . get_permalink( $prev_project->ID ) . '" class="single-link-nav">' . esc_html__('Next project', 'glacier') . '<i class="fa fa-angle-right"></i></a>' );
	$nav .= '<div class="next-button">' . $prev . '</div>';
	endif;

	$next_project = get_next_post();

	if (!empty( $next_project )): 
	$next = get_next_post_link( '<a href="' . get_permalink( $next_project->ID ) . '" class="single-link-nav"><i class="fa fa-angle-left"></i>' . esc_html__('Prev project', 'glacier') . '</a>' );
	$nav .= '<div class="prev-button">' . $next . '</div>';
	endif;
	
	$nav .= '</div>';
	
	return $nav;
	
}

/* ==================================== */
/* ::::::: Cutting text in post ::::::: */
/* ==================================== */

function glacier_excerpt_length($length) {
    return 50;
}
add_filter('excerpt_length', 'glacier_excerpt_length');

function glacier_excerpt_more($more) {
    global $post;
    return '<div class="post-button">
			   <a href="'. get_permalink($post->ID) . '">' . esc_html__('Read More', 'glacier') . '</a>
			</div>';
}
add_filter('excerpt_more', 'glacier_excerpt_more');



/* =============================== */
/* ::::::: Page pagination ::::::: */
/* =============================== */

function glacier_page_pagination( $template, $class ) {

	return '
	<nav class="%1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';

}
add_filter('navigation_markup_template', 'glacier_page_pagination', 10, 2 );

/* =============================== */
/* :::::: Column thumbnail ::::::: */
/* =============================== */

function glacier_add_thumbnail_column_post($columns) {

	$column_thumbnail = array(
		'thumbnail' => esc_html__('Thumbnail', 'glacier')
	);
	$columns = array_slice($columns, 0, 2, true) + $column_thumbnail + array_slice($columns, 1, NULL, true);
	return $columns;

}

function glacier_display_thumbnail_post($column) {

	global $post;
	switch ( $column ) {
		case 'thumbnail':
			echo get_the_post_thumbnail($post->ID, array(
				50,
				50
			));
			break;
	}

}
add_filter('manage_edit-post_columns', 'glacier_add_thumbnail_column_post', 10, 1);
add_action('manage_post_posts_custom_column', 'glacier_display_thumbnail_post', 10, 1);

/* =================================== */
/* ::::::: If devmode disabled ::::::: */
/* =================================== */

// add_filter('acf/settings/show_admin', '__return_false');

/* ============================================= */
/* :::::: Save acf options to json files ::::::: */
/* ============================================= */

if(!function_exists('glacier_acf_save_json')) {
	function glacier_acf_save_json($path) {
	    $path = trailingslashit(get_template_directory() ) . 'lib/custom-fields';
	    return $path;
	}
}
add_filter('acf/settings/save_json', 'glacier_acf_save_json');


/* ============================================= */
/* ::::: Load acf options from json files :::::: */
/* ============================================= */

if(!function_exists('glacier_acf_load_json')) {
	function glacier_acf_load_json($paths) {
	    unset($paths[0]);
	    $paths[] = trailingslashit(get_template_directory() ) . 'lib/custom-fields';
	    return $paths;
	}
}
add_filter('acf/settings/load_json', 'glacier_acf_load_json');

