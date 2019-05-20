<?php
/**
 * Plugin Name: Glacier Helper Plugin
 * Plugin URI: https://themeforest.net/user/mountaintheme
 * Description: Required extensions for correct work theme.
 * Version: 1.0
 * Author: MountainTheme
 * Author URI: https://themeforest.net/user/mountaintheme
 * License: GNU General Public License version 3.0 & Envato Regular/Extended License
 */


// Exit if accessed directly

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/* ============================ */
/* :::::: Social services ::::: */
/* ============================ */

function glacier_social_scripts() {

// Twitter Widget
wp_enqueue_script('twitter-wjs', '//platform.twitter.com/widgets.js', array(), '', true );

// Facebook Widget
 wp_enqueue_script('facebook-wjs', '//connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.5', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'glacier_social_scripts' );

/* =================================== */
/* :: Visual Composer my shortcodes :: */
/* =================================== */


/* :::::::::: Partners :::::::: */

require_once( plugin_dir_path( __FILE__ ) . 'vc_shortcodes/mt_partners.php' );


/* ::::::::: Skill Bars ::::::::: */

require_once( plugin_dir_path( __FILE__ ) . 'vc_shortcodes/mt_skillbars.php' );

/* :::::::::::: Skill ::::::::::: */

require_once( plugin_dir_path( __FILE__ ) . 'vc_shortcodes/mt_skill.php' );

/* :::::::::: Experience :::::::: */

require_once( plugin_dir_path( __FILE__ ) . 'vc_shortcodes/mt_experience.php' );

/* :::::::::::: Hobbies ::::::::: */

require_once( plugin_dir_path( __FILE__ ) . 'vc_shortcodes/mt_hobbies.php' );

/* :::::::::: Team :::::::: */

require_once( plugin_dir_path( __FILE__ ) . 'vc_shortcodes/mt_team.php' );

/* :::::::::: Icon :::::::: */

require_once( plugin_dir_path( __FILE__ ) . 'vc_shortcodes/mt_icon.php' );

/* :::::::::: Google map :::::::: */

require_once( plugin_dir_path( __FILE__ ) . 'vc_shortcodes/mt_google_map.php' );


