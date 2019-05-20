<?php

/* ====================== */
/* :::::::: Skill ::::::: */
/* ====================== */

add_shortcode( "mt_skill", "mt_skill_fun" );

function mt_skill_fun( $atts ) {
    extract( shortcode_atts( array(
      "title" => "HTML5/CSS3",
      "percent" => "95",
      "track_color" => "#000",
      "track_height" => "1",
      "mb" => "50",
      "extra_class" => ""
   ), $atts ) );
   
      $output  = "<div class='skillbar " . $extra_class . "' style='margin-bottom: " . $mb . "px; ";
      $output .= "'";
      $output .= "data-percent=" . $percent . "%>"; 
      $output .= "<div class='skillbar-title'><h5>" . $title . "</h5></div>";
      $output .= "<div class='skillbar-bar' style='height: " . $track_height . "px; background: " . $track_color . ";'></div>";
      $output .= "<div class='skill-bar-percent'>" . $percent . "%</div>";
      $output .= "</div>";

      return $output;
}

/* Add VC Shortcode */

add_action( "vc_before_init", "vc_glacier_skill" );

function vc_glacier_skill() {

vc_map( array(
   "name" => esc_html__("Skill", "glacier"),
   "base" => "mt_skill",
   "icon" => plugins_url('icons/welcome.png', __FILE__),
   "as_child" => array(
            "only" => "mt_skillbars"
   ),
   "category" => esc_html__("MountainTheme", "glacier"),
   "params" => array(
      array(
        "type"        => "textfield",
        "heading"     => esc_html__( "Title", "glacier" ),
        "param_name"  => "title",
        "value"       => esc_html__( "HTML5/CSS3", "glacier" ),
        "admin_label" => true,
        "description" => "",
        "group" => "General"
      ),
      array(
        "type"        => "textfield",
        "heading"     => esc_html__( "Percent", "glacier" ),
        "param_name"  => "percent",
        "value"       => "95",
        "admin_label" => true,
        "description" => "",
        "group" => "General"
      ),  
      array(
        "type" => "colorpicker",
        "param_name" => "track_color",
        "heading" => esc_html__("Track Color", "glacier"),
        "value" => "#000",
        "group" => "Style"
      ),      
      array(
        "type"        => "textfield",
        "heading"     => esc_html__( "Track Height (px)", "glacier" ),
        "param_name"  => "track_height",
        "value"       => "1",
        "description" => "",
        "group" => "Style"
      ), 
      array(
        "type"        => "textfield",
        "heading"     => esc_html__( "Margin Bottom (px)", "glacier" ),
        "param_name"  => "mb",
        "value"       => "50",
        "description" => "",
        "group" => "Style"
      ), 
      array(
        "type" => "textfield",
        "heading" => esc_html__( "Extra class", "glacier"),
        "param_name" => "extra_class",
        "value" => "",
        "admin_label" => true,
        "group" => "Extras"
      ),    
      )
  ) );
}


// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
if(class_exists('WPBakeryShortCodesContainer')){
    class WPBakeryShortCode_mt_skillbars extends WPBakeryShortCodesContainer {

    }
}

// Replace Wbc_Inner_Item with your base name from mapping for nested element
if(class_exists('WPBakeryShortCode')){
    class WPBakeryShortCode_mt_skill extends WPBakeryShortCode {

    }
}