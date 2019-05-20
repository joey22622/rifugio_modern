<?php
/**
 * glacier Plugins Activation
 *
 * @package glacier
 */

require get_template_directory() . '/lib/tgm/class-tgm-plugin-activation.php';


function glacier_register_required_plugins() {

	 $plugins = array(

		array(
			'name'               => esc_html__( 'WPBakery Visual Composer', 'glacier' ), 
			'slug'               => 'js_composer', 
			'source'             => esc_url( 'http://wordpress.mountaintheme.com/plugins/js_composer.zip' ),  
			'required'           => true, 
		),

		array(
			'name'               => esc_html__( 'Kirki', 'glacier' ), 
			'slug'               => 'kirki', 
			'required'           => true, 
		),

		array(
			'name'               => esc_html__( 'Glacier Helper Plugin', 'glacier' ), 
			'slug'               => 'glacier_helper_plugin', 
			'source'             => esc_url( 'http://wordpress.mountaintheme.com/plugins/helper/glacier-helper-plugin.zip' ), 
			'required'           => true, 
			'version' => '1.0'
		),	

		array(
			'name'               => esc_html__( 'Advanced Custom Fields PRO', 'glacier' ), 
			'slug'               => 'acf_pro', 
			'source'             => esc_url( 'http://wordpress.mountaintheme.com/plugins/advanced-custom-fields-pro.zip' ),
			'required'           => true, 
		),

		array(
			'name'               => esc_html__( 'Visual Portfolio', 'glacier' ), 
			'slug'               => 'visual-portfolio', 
			'required'           => true, 
		),

		array(
			'name'               => esc_html__( 'Slider Revolution', 'glacier' ), 
			'slug'               => 'rev_slider', 
			'source'             => esc_url( 'http://wordpress.mountaintheme.com/plugins/revslider.zip' ), 
			'required'           => true, 
		),	

		array(
			'name'               => esc_html__( 'Ultimate VC Addons', 'glacier' ),
			'slug'               => 'vc_addons',
			'source'             => esc_url( 'http://wordpress.mountaintheme.com/plugins/ultimate_vc_addons.zip' ), 
			'required'           => false, 
		),

		array(
			'name'               => esc_html__( 'Contact Form 7', 'glacier' ),
			'slug'               => 'contact-form-7', 
			'required'           => true, 
		),

		array(
			'name'               => esc_html__( 'Envato Market', 'glacier' ),
			'slug'               => 'envato-market',
			'source'             => esc_url( 'http://wordpress.mountaintheme.com/plugins/envato-market.zip' ),
			'required'           => false, 
		),
		array(
				'name' => esc_html__( 'WooCommerce', 'glacier' ),
				'slug' => 'woocommerce',
				'required' => false,
		),

	);


    tgmpa( $plugins );
}


add_action( 'tgmpa_register', 'glacier_register_required_plugins' );

 
