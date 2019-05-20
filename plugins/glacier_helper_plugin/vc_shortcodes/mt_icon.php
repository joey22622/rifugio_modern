<?php

/* ====================== */
/* :::::::: Icon :::::::: */
/* ====================== */

add_shortcode( "mt_icon", "mt_icon_fun" );

function mt_icon_fun( $atts ) {
    extract( shortcode_atts( array(
      "icon" => "fa fa-twitter",
      "url" => "#",
      "target" => "_self",
      "color_icon" => "#fff",
      "extra_class" => ""

   ), $atts ) );
   
      $output = "<li class='" . $extra_class . "'><a href='" . $url . "' target='" . $target . "'><i class='fa fa-fw " . $icon . "' style='color: " . $color_icon . ";'></i></a></li>";

      return $output;
}

/* Add VC Shortcode */

add_action( "vc_before_init", "vc_mt_icon" );

function vc_mt_icon() {

vc_map( array(
   "name" => esc_html__("Social Icon", "glacier"),
   "base" => "mt_icon",
   "as_child" => array(
            "only" => "mt_team"
   ),
   "icon" => plugins_url('icons/welcome.png', __FILE__),
   "category" => esc_html__("MountainTheme", "glacier"),
   "params" => array(
     array(
        "type" => "dropdown",
        "heading" => esc_html__( "Icon library", "glacier" ),
        "value" => array(
          esc_html__( "Font Awesome", "glacier" ) => "fontawesome",
        ),
        "admin_label" => false,
        "param_name" => "type",
        "description" => "",
        "group" => "General"
      ),
      array(
        "type" => "iconpicker",
        "heading" => esc_html__( "Icon", "glacier" ),
        "param_name" => "icon",
        "value" => "fa fa-twitter", // default value to backend editor admin_label
        "settings" => array(
          "emptyIcon" => true,
          // default true, display an "EMPTY" icon?
          "iconsPerPage" => 4000,
          // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
        ),
        "dependency" => array(
          "element" => "type",
          "value" => "fontawesome",
        ),
        "group" => "General"
      ), 
      array(
        "type"        => "textfield",
        "heading"     => esc_html__( "URL", "glacier" ),
        "param_name"  => "url",
        "value"       => "#",
        "description" => "",
        "group" => "General"
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__("Target", "glacier"),
        "param_name" => "target",
        "value" => array(
          esc_attr__("This Site", "glacier") => "_self",
          esc_attr__("New Page", "glacier") => "_blank",
        ),
        "group" => "General"
      ),
      array(
        "type" => "colorpicker",
        "param_name" => "color_icon",
        "heading" => esc_html__( "Color icon", "glacier" ),
        "value" => "#fff",
        "group" => "Style"
      ),
      array(
        "type" => "textfield",
        "heading" => esc_html__( "Extra class", "glacier"),
        "param_name" => "extra_class",
        "value" => "",
        "group" => "Extras"
      ),

      )
  ) );
}

// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
if(class_exists('WPBakeryShortCodesContainer')){
    class WPBakeryShortCode_mt_team extends WPBakeryShortCodesContainer {

    }
}

// Replace Wbc_Inner_Item with your base name from mapping for nested element
if(class_exists('WPBakeryShortCode')){
    class WPBakeryShortCode_mt_icon extends WPBakeryShortCode {

    }
}