<?php

/* ====================== */
/* :::::: Partners :::::: */
/* ====================== */

add_shortcode( "mt_partners", "mt_partners_fun" );

function mt_partners_fun( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'image' => "",
      'url' => 'http://www.google.com',
      'title' => 'Partner Title',
      'target' =>'_blank'
    ), $atts));
   
    $image_done = wp_get_attachment_image($image,'full img-responsive vc_team_member_image');
  
    $output ='<div class="partners"><a target="'.$target.'" href="'.$url.'" title="'.$title.'">'.$image_done.'</a></div>';
    
    return $output;
}

/* Add VC Shortcode */

add_action( "vc_before_init", "vc_glacier_partners" );

function vc_glacier_partners() {

vc_map( array(
   "name" => esc_html__("Partner logo", "glacier"),
   "base" => "mt_partners",
   "icon" => plugins_url('icons/welcome.png', __FILE__),
   "category" => esc_html__("MountainTheme", "glacier"),
    "params" => array(
    array(
         "type" => "attach_image",
         "class" => "",
         "heading" => esc_html__("logo",'glacier'),
         "param_name" => "image",
         "value" => "",
      ),
    array(
         "type" => "textfield",
         "class" => "",
         "heading" => esc_html__("URL",'glacier'),
         "param_name" => "url",
         "value" => "http://www.google.com",
      ),
    array(
      'type' => 'dropdown',
      'heading' => "URL Target",
      'param_name' => 'target',
      'value' => array( "_self", "_blank"),
      'std' => '_blank',
    ),
    array(
         "type" => "textfield",
         "class" => "",
         "heading" => esc_html__("Title",'glacier'),
         "param_name" => "title",
         "value" => "Partner Title",
      ),
      )
    ));
}