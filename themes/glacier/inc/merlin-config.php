<?php

/**
 * Merlin WP
 *
 * @package glacier
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

$wizard = new Merlin(

	$config = array(
		'directory' => 'merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url' => 'merlin', // The wp-admin page slug where Merlin WP loads.
		'child_action_btn_url' => 'https://codex.wordpress.org/child_themes', // URL for the 'child-action-link'.
		'dev_mode' => false, // Enable development mode for testing.
		'license_step' => false, // EDD license activation step.
		'license_required' => false, // Require the license activation step.
		'license_help_url' => '', // URL for the 'license-tooltip'.
		'edd_remote_api_url' => '', // EDD_Theme_Upater_Admin remote_api_url.
		'edd_item_name' => '', // EDD_Theme_Upater_Admin item_name.
		'edd_theme_slug' => '', // EDD_Theme_Upater_Admin item_slug.
	),
	$strings = array(
		'admin-menu' => esc_html__( 'Theme Setup', 'glacier' ),
		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s' => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'glacier' ),
		'return-to-dashboard' => esc_html__( 'Return to the dashboard', 'glacier' ),
		'ignore' => esc_html__( 'Disable this wizard', 'glacier' ),
		'btn-skip' => esc_html__( 'Skip', 'glacier' ),
		'btn-next' => esc_html__( 'Next', 'glacier' ),
		'btn-start' => esc_html__( 'Start', 'glacier' ),
		'btn-no' => esc_html__( 'Cancel', 'glacier' ),
		'btn-plugins-install' => esc_html__( 'Install', 'glacier' ),
		'btn-child-install' => esc_html__( 'Install', 'glacier' ),
		'btn-content-install' => esc_html__( 'Install', 'glacier' ),
		'btn-import' => esc_html__( 'Import', 'glacier' ),
		'btn-license-activate' => esc_html__( 'Activate', 'glacier' ),
		'btn-license-skip' => esc_html__( 'Later', 'glacier' ),
		/* translators: Theme Name */
		'license-header%s' => esc_html__( 'Activate %s', 'glacier' ),
		/* translators: Theme Name */
		'license-header-success%s' => esc_html__( '%s is Activated', 'glacier' ),
		/* translators: Theme Name */
		'license%s' => esc_html__( 'Enter your license key to enable remote updates and theme support.', 'glacier' ),
		'license-label' => esc_html__( 'License key', 'glacier' ),
		'license-success%s' => esc_html__( 'The theme is already registered, so you can go to the next step!', 'glacier' ),
		'license-json-success%s' => esc_html__( 'Your theme is activated! Remote updates and theme support are enabled.', 'glacier' ),
		'license-tooltip' => esc_html__( 'Need help?', 'glacier' ),
		/* translators: Theme Name */
		'welcome-header%s' => esc_html__( 'Welcome to %s', 'glacier' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'glacier' ),
		'welcome%s' => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.', 'glacier' ),
		'welcome-success%s' => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'glacier' ),
		'child-header' => esc_html__( 'Install Child Theme', 'glacier' ),
		'child-header-success' => esc_html__( 'You\'re good to go!', 'glacier' ),
		'child' => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.', 'glacier' ),
		'child-success%s' => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'glacier' ),
		'child-action-link' => esc_html__( 'Learn about child themes', 'glacier' ),
		'child-json-success%s' => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.', 'glacier' ),
		'child-json-already%s' => esc_html__( 'Awesome. Your child theme has been created and is now activated.', 'glacier' ),
		'plugins-header' => esc_html__( 'Install Plugins', 'glacier' ),
		'plugins-header-success' => esc_html__( 'You\'re up to speed!', 'glacier' ),
		'plugins' => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'glacier' ),
		'plugins-success%s' => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'glacier' ),
		'plugins-action-link' => esc_html__( 'Advanced', 'glacier' ),
		'import-header' => esc_html__( 'Import Content', 'glacier' ),
		'import' => esc_html__( 'Let\'s import content to your website, to help you get familiar with the theme.', 'glacier' ),
		'import-action-link' => esc_html__( 'Advanced', 'glacier' ),
		'ready-header' => esc_html__( 'All done. Have fun!', 'glacier' ),
		/* translators: Theme Author */
		'ready%s' => esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.', 'glacier' ),
		'ready-action-link' => esc_html__( 'Extras', 'glacier' ),
		'ready-big-button' => esc_html__( 'View your website', 'glacier' ),
		'ready-link-1' => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://wordpress.org/support/', esc_html__( 'Explore WordPress', 'glacier' ) ),
		'ready-link-2' => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'customize.php' ), esc_html__( 'Start Customizing', 'glacier' ) ),
	)
);

/**
 * Demo import
 */
if ( ! function_exists( 'glacier_demo_import_files' ) ) {
	function glacier_demo_import_files() {
		return array(
			array(
				'import_file_name' => esc_html__( 'Demo Import', 'glacier' ),
				'local_import_file' => get_template_directory() . '/inc/demo/demo-content.xml',
				'local_import_widget_file' => get_template_directory() . '/inc/demo/widgets.wie',
				'local_import_customizer_file' => get_template_directory() . '/inc/demo/customizer.dat'
			),
		);
	}
}
add_filter( 'merlin_import_files', 'glacier_demo_import_files' );
add_filter( 'pt-ocdi/import_files', 'glacier_demo_import_files' );

/**
 * After setup function
 */
if ( ! function_exists( 'glacier_after_import_setup' ) ) {
	function glacier_after_import_setup() {

		global $wp_rewrite;

		// Set menus
		$primary_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );

		set_theme_mod( 'nav_menu_locations', array(
			'primary-menu' => $primary_menu->term_id
		) );

		// Set pages
		$front_page = get_page_by_title( 'Home - Parallax' );
		if ( isset( $front_page->ID ) ) {
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $front_page->ID );
		}

		// Update option
		update_option( 'date_format', 'd F Y' );

		// Update permalink
		$wp_rewrite->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' );

		// Import Revolution Slider
		if ( class_exists( 'RevSlider' ) ) {
			$revo_slider = new RevSlider();

			$slider_aliases = $revo_slider->getAllSliderAliases();
			$slider_array = array(
				'glacier'
			);

			foreach ( $slider_array as $slider ) {
				if ( ! in_array( $slider, $slider_aliases ) ) {
					$path = get_template_directory() . '/inc/demo/sliders/'. $slider .'.zip';
					if ( file_exists( $path ) ) {
						$revo_slider->importSliderFromPost( true, true, $path );
					}
				}
			}
		}

	}
}
add_action( 'merlin_after_all_import', 'glacier_after_import_setup' );
add_action( 'pt-ocdi/after_import', 'glacier_after_import_setup' );

/**
 * WPBakery set as theme
 */
if ( ! function_exists( 'glacier_vc_set_as_theme' ) ) {
	function glacier_vc_set_as_theme() {

		if ( function_exists( 'vc_set_default_editor_post_types' ) ) {
			vc_set_default_editor_post_types( array(
				'page',
				'post',
				'portfolio',
				'product'
			) );
		}

		if ( function_exists( 'vc_set_as_theme' ) ) {
			vc_set_as_theme( $disable_updater = true );
		}

	}
}
add_action( 'vc_before_init', 'glacier_vc_set_as_theme' );