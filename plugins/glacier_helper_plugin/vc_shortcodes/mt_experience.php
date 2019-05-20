<?php

/* =========================== */
/* ::::::::: Experience :::::: */
/* =========================== */

add_shortcode( "mt_experience", "mt_experience_fun" );

function mt_experience_fun( $atts ) {
    extract( shortcode_atts( array(
      "icon" => "fa fa-briefcase",
      "title" => "Projects",
      "number" => "58",
      "mb" => "35",
      "color_icon" => "#000",
      "extra_class" => ""

   ), $atts ) );
   
      $output = "<div style='margin-bottom:" . $mb . "px;' class='experience-box " . $extra_class . "'>";
      $output .= "<div class='icon'>";
      $output .= "<i class='" . $icon . "' style='color: " . $color_icon . ";'></i>";
      $output .= "</div>";
      $output .= "<h4>" . $title . "</h4>";
      $output .= "<div class='timer'>";
      $output .= "<span class='number'>" . $number . "</span>";
      $output .= "</div>";
      $output .= "</div>";

      return $output;
}

/* Add VC Shortcode */

add_action( "vc_before_init", "vc_glacier_experience" );

function vc_glacier_experience() {

vc_map( array(
   "name" => esc_html__("Experience", "glacier"),
   "base" => "mt_experience",
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
        "value" => "fa fa-briefcase", // default value to backend editor admin_label
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
        "value"       => "Projects",
        "description" => "",
        "admin_label" => true,
        "group" => "General"
      ),
      array(
        "type"        => "textfield",
        "heading"     => esc_html__( "Number", "glacier" ),
        "param_name"  => "number",
        "value"       => "58",
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
        "value"       => "35",
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
