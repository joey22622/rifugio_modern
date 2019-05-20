<?php

/* =========================== */
/* :::::::::: Hobbies :::::::: */
/* =========================== */

add_shortcode( "mt_hobbies", "mt_hobbies_fun" );

function mt_hobbies_fun( $atts ) {
    extract( shortcode_atts( array(
      "icon" => "fa fa-rocket",
      "title" => "Space",
      "mb" => "40",
      "color_icon" => "#000",
      "extra_class" => ""

   ), $atts ) );
   
      $output = "<div style='margin-bottom:" . $mb . "px;' class='hobbies-box " . $extra_class . "'>";
      $output .= "<div class='icon'>";
      $output .= "<i class='" . $icon . "' style='color: " . $color_icon . ";'></i>";
      $output .= "</div>";
      $output .= "<h4>" . $title . "</h4>";
      $output .= "</div>";

      return $output;
}

/* Add VC Shortcode */

add_action( "vc_before_init", "vc_glacier_hobbies" );

function vc_glacier_hobbies() {

vc_map( array(
   "name" => esc_html__("Hobbies and Interests", "glacier"),
   "base" => "mt_hobbies",
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
        "value" => "fa fa-rocket", // default value to backend editor admin_label
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
        "heading"     => esc_html__( "Title", "glacier" ),
        "param_name"  => "title",
        "value"       => "Space",
        "description" => "",
        "admin_label" => true,
        "group" => "General"
      ),
      array(
        "type" => "colorpicker",
        "param_name" => "color_icon",
        "heading" => esc_html__( "Color icon", "glacier" ),
        "value" => "#000",
        "group" => "Style"
      ),  
      array(
        "type"        => "textfield",
        "heading"     => esc_html__( "Margin Bottom (px)", "glacier" ),
        "param_name"  => "mb",
        "value"       => "40",
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
      )
  ) );
}
