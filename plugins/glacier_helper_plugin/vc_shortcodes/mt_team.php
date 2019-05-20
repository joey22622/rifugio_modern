<?php

/* ====================== */
/* :::::::: Team :::::::: */
/* ====================== */

add_shortcode( "mt_team", "mt_team_fun" );

function mt_team_fun( $atts, $content = null ) {
    extract(shortcode_atts(array(
      "image" => "",
      "name" => "PAUL TORRES",
      "text" => "We don't want to conquer the cosmos, we simply want to extend the boundaries of Earth to the frontiers of the cosmos."
    ), $atts));
   
    $image_done = wp_get_attachment_image($image,'full img-responsive vc_team_member_image');
  
    $output = "<div class='team'>";
    $output .= "" . $image_done . "";
    $output .= "<h2>" . $name . "</h2>";
    $output .= "<p>" . $text . "</p>";
    $output .= "<div class='social-icons'>";
    $output .= "<ul>";
    $output .= do_shortcode($content);
    $output .= "</ul>";
    $output .= "</div>";
    $output .= "</div>";
    
    return $output;
}

/* Add VC Shortcode */

add_action( "vc_before_init", "vc_mt_team" );

function vc_mt_team() {

vc_map( array(
   "name" => esc_html__("Team", "glacier"),
   "base" => "mt_team",
   "as_parent" => array(
            "only" => "mt_icon"
   ),
   "icon" => plugins_url('icons/welcome.png', __FILE__),
   "category" => esc_html__("MountainTheme", "glacier"),
    "params" => array(
    array(
         "type" => "attach_image",
         "class" => "",
         "heading" => esc_html__("Image",'glacier'),
         "param_name" => "image",
         "value" => "",
      ),
    array(
         "type" => "textfield",
         "class" => "",
         'admin_label' => true,
         "heading" => esc_html__("Name",'glacier'),
         "param_name" => "name",
         "value" => "PAUL TORRES",
      ),
    array(
      "type" => "textarea",
      "admin_label" => true,
      "heading" => "Text",
      "param_name" => "text",
      "value" => "We don't want to conquer the cosmos, we simply want to extend the boundaries of Earth to the frontiers of the cosmos.",
    ),
    ),
    "js_view" => "VcColumnView"
    ));
}

