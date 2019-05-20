<?php

/* ====================== */
/* :::::: Skillbars ::::: */
/* ====================== */

add_shortcode( "mt_skillbars", "mt_skillbars_fun" );

function mt_skillbars_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
      "mt" => "0",
      "mb" => "0",
      "extra_class" => ""

   ), $atts ) );
   
      $output  = "<div style='margin-top: " . $mt . "px; margin-bottom: " . $mb . "px;' class='" . $extra_class . "'>";
      $output .= do_shortcode($content);
      $output .= "</div>";
      
      return $output;
}

/* Add VC Shortcode */

add_action( "vc_before_init", "vc_glacier_skillbars" );

function vc_glacier_skillbars() {

vc_map( array(
   "name" => esc_html__("Skill Bars", "glacier"),
   "base" => "mt_skillbars",
   "icon" => plugins_url('icons/welcome.png', __FILE__),
   "as_parent" => array(
            "only" => "mt_skill"
   ),
   "category" => esc_html__("MountainTheme", "glacier"),
   "params" => array(
      array(
        "type"        => "textfield",
        "heading"     => esc_html__( "Margin Top (px)", "glacier" ),
        "param_name"  => "mt",
        "value"       => "0",
        "description" => "",
        "group" => "Style"
      ),
      array(
        "type"        => "textfield",
        "heading"     => esc_html__( "Margin Bottom (px)", "glacier" ),
        "param_name"  => "mb",
        "value"       => "0",
        "description" => "",
        "group" => "Style"
      ),  
      array(
        "save_always" => true,
        "type" => "textfield",
        "holder" => false,
        "heading" => esc_html__( "Extra class", "glacier"),
        "param_name" => "extra_class",
        "value" => "",
        "admin_label" => true,
        "group" => "Extras"
      ),
      ),
     "js_view" => "VcColumnView"
  ) );
}
