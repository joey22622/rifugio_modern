<?php

/* =========================== */
/* :::::::: Google Map ::::::: */
/* =========================== */

add_shortcode('mt_google_map', 'mt_google_map_fun');

function mt_google_map_fun($atts)
{
    extract(shortcode_atts(array(
        "map_name"    => "google-one",
        "title_marker" => "Melbourne, Australia",
        "visible_map_marker" => false,
        "visible_target_email" => false,
        "visible_target_website" => false,
        "map_img" => "",
        "latitude" => "-37.8602828",
        "longitude" => "145.079616",
        "zoom" => 9,
        "apikey" => "AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw",
        "visible_info_box" => false,
        "title" => "CONTACT INFORMATION.",
        "icon_address" => "fa fa-map-marker",
        "address" => "Melbourne, Australia",
        "icon_phone" => "fa fa-phone",
        "phone" => "765-302-2878",
        "icon_email" => "fa fa-envelope-o",
        "email_link" => "mailto:name@domain.com",
        "email" => "name@domain.com",
        "icon_website" => "fa fa-globe",
        "website_link" => "https://themeforest.net/user/mountaintheme",
        "website" => "mycompanyname.com",
        "map_color" => "#2d313f",
        "saturation" => "-70",
        "brightness" => "5",
        "visible_zoom" => false,
        "bg_zoom" => "rgba(0, 0, 0, 0.7)",
        "bg_zoom_hover" => "#000000",
        "width_map" => "100%",
        "height_map" => "450px"
    ), $atts));
    
    // get marker icon
    $image_done = wp_get_attachment_image_src($map_img, 'full');
    
    
    $output = "<div id='" . $map_name . "' class='google-container' style='width:" . $width_map . "; height:" . $height_map . "'></div>

        <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=" . $apikey . "'></script>
        <script type='text/javascript'>
        jQuery.noConflict()(function($){
        

              //set your google maps parameters
              var latitude = " . $latitude . ",
                longitude = " . $longitude . ",
                map_zoom = " . $zoom . ";

              //google map custom marker icon - .png fallback for IE11
              var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
              var marker_url = ( is_internetExplorer11 ) ? '" .  $image_done[0] . "' : '" .  $image_done[0] . "';
    
              //define the basic color of your map, plus a value for saturation and brightness
              var main_color = '" . $map_color . "',
                saturation_value= " . $saturation . ",
                brightness_value= " . $brightness . ";

                  //we define here the style of the map
                  var style= [ 
                    {
                      //set saturation for the labels on the map
                      elementType: 'labels',
                      stylers: [
                        {saturation: saturation_value},
                      ]
                    },  
                      { //poi stands for point of interest - don't show these lables on the map 
                      featureType: 'poi',
                      elementType: 'labels',
                      stylers: [
                        {visibility: 'off'},
                      ]
                    },
                    {
                      //don't show highways lables on the map
                          featureType: 'road.highway',
                          elementType: 'labels',
                          stylers: [
                              {visibility: 'off'},
                          ]
                      }, 
                    {   
                      //don't show local road lables on the map
                      featureType: 'road.local', 
                      elementType: 'labels.icon', 
                      stylers: [
                        {visibility: 'off'}, 
                      ] 
                    },
                    { 
                      //don't show arterial road lables on the map
                      featureType: 'road.arterial', 
                      elementType: 'labels.icon', 
                      stylers: [
                        {visibility: 'off'},
                      ] 
                    },
                    {
                      //don't show road lables on the map
                      featureType: 'road',
                      elementType: 'geometry.stroke',
                      stylers: [
                        {visibility: 'off'},
                      ]
                    }, 
                    //style different elements on the map
                    { 
                      featureType: 'transit', 
                      elementType: 'geometry.fill', 
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    }, 
                    {
                      featureType: 'poi',
                      elementType: 'geometry.fill',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    },
                    {
                      featureType: 'poi.government',
                      elementType: 'geometry.fill',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    },
                    {
                      featureType: 'poi.sport_complex',
                      elementType: 'geometry.fill',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    },
                    {
                      featureType: 'poi.attraction',
                      elementType: 'geometry.fill',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    },
                    {
                      featureType: 'poi.business',
                      elementType: 'geometry.fill',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    },
                    {
                      featureType: 'transit',
                      elementType: 'geometry.fill',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    },
                    {
                      featureType: 'transit.station',
                      elementType: 'geometry.fill',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    },
                    {
                      featureType: 'landscape',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                      
                    },
                    {
                      featureType: 'road',
                      elementType: 'geometry.fill',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    },
                    {
                      featureType: 'road.highway',
                      elementType: 'geometry.fill',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    }, 
                    {
                      featureType: 'water',
                      elementType: 'geometry',
                      stylers: [
                        { hue: main_color },
                        { visibility: 'on' }, 
                        { lightness: brightness_value }, 
                        { saturation: saturation_value },
                      ]
                    }
                  ];
    

              //set google map options
              var map_options = {
                    center: new google.maps.LatLng(latitude, longitude),
                    zoom: map_zoom,
                    panControl: false,
                    zoomControl: false,
                    mapTypeControl: false,
                    streetViewControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    styles: style,
                }

              //inizialize the map
              var map = new google.maps.Map(document.getElementById('" . $map_name . "'), map_options);
              //add a custom marker to the map\n\n"; 

        $output .= "var contentString = '<div class=\"contact-box left\">'+";
        $output .= "'<h3>" . $title . "</h3>'+";
        $output .= "'<ul>'+";
        $output .= "'<li><i class=\"fa-fw " . $icon_address . "\"></i>" . $address . "</li>'+";
        $output .= "'<li><i class=\"fa-fw " . $icon_phone . "\"></i>" . $phone . "</li>'+";
        $output .= "'<li><i class=\"fa-fw " . $icon_email . "\"></i><a href=\"". $email_link ."\"";

        if ($visible_target_email == false) {

         $output .= " target=\"_blank\"";

        };

        $output .= ">" . $email . "</a></li>'+";
        $output .= "'<li><i class=\"fa-fw " . $icon_website . "\"></i><a href=\"". $website_link ."\"";

        if ($visible_target_website == false) {

         $output .= " target=\"_blank\"";

        };

        $output .= ">" . $website . "</a></li>'+";
        $output .= "'</ul>'+";
        $output .= "'</div>'\n\n";

        if ($visible_info_box == false) {
        $output .= "var infowindow = new google.maps.InfoWindow({";
        $output .= "content: contentString,";
        $output .= "maxWidth: 300,";
        $output .= "});\n";
        };

        $output .= "
              var marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitude, longitude),
              map: map,
              title: '" . $title_marker . "',";

        if ($visible_map_marker == false) {
        $output .= "visible: true,";
        } else {
        $output .= "visible: false,";
        };

        $output .= "icon: marker_url,
          });";

        if ($visible_info_box == false) {
         $output .= "infowindow.open(map,marker);";
         };

         $output .= "
         google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
          });

          google.maps.event.addDomListener(window, 'resize', function() {
             var center = map.getCenter();
             google.maps.event.trigger(map, 'resize');
             map.setCenter(center); 

            }); 

";      
  
  if ($visible_zoom == false) {    
          $output .= "//add custom buttons for the zoom-in/zoom-out on the map
          function CustomZoomControl(controlDiv, map) {
            //grap the zoom elements from the DOM and insert them in the map 
              var controlUIzoomIn= document.getElementById('zoom-in'),
                controlUIzoomOut= document.getElementById('zoom-out');
              controlDiv.appendChild(controlUIzoomIn);
              controlDiv.appendChild(controlUIzoomOut);

            // Setup the click event listeners and zoom-in or out according to the clicked element
            google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
                map.setZoom(map.getZoom()+1)
            });
            google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
                map.setZoom(map.getZoom()-1)
            });
          }

          var zoomControlDiv = document.createElement('div');
          var zoomControl = new CustomZoomControl(zoomControlDiv, map);

            //insert the zoom div on the top left of the map
            map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);
            ";
  };
        $output .="});

        </script>";

    if ($visible_zoom == false) {     
    $output .= "<div id='zoom-in'></div>";
    $output .= "<div id='zoom-out'></div>";
    echo "<style type='text/css'>#zoom-in, #zoom-out {background-color: " . $bg_zoom . ";} #zoom-in:hover, #zoom-out:hover {background-color: " . $bg_zoom_hover . "}</style>";

    };

    return $output;
}

/* Add VC Shortcode */

add_action("vc_before_init", "vc_glacier_google_map");

function vc_glacier_google_map()
{
    vc_map(array(
        "name" => esc_html__("Google Map", "glacier"),
        "base" => "mt_google_map",
        "icon" => plugins_url("icons/welcome.png", __FILE__),
        "category" => esc_html__("MountainTheme", "glacier"),
        "params" => array(     
            array(
                "type" => "textfield",
                "heading" => esc_html__("Map name", "glacier"),
                "param_name" => "map_name",
                "value" => "google-one",
                "group" => "General"
            ),     
            array(
                "type" => "dropdown",
                "heading" => esc_html__("Map Zoom", "glacier"),
                "param_name" => "zoom",
                "value" => array(
                    esc_attr__("9 - Default", "glacier") => 9,
                    1,
                    2,
                    3,
                    4,
                    5,
                    6,
                    7,
                    8,
                    9,
                    10,
                    11,
                    12,
                    13,
                    15,
                    16,
                    17,
                    18,
                    19,
                    20
                ),                
                "group" => "General"
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Latitude", "glacier"),
                "param_name" => "latitude",
                "value" => "-37.8602828",
                "group" => "General"
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Longitude", "glacier"),
                "param_name" => "longitude",
                "value" => "145.079616",
                "group" => "General"
            ),
            array(
                "type" => "textfield",
                "param_name" => "apikey",
                "heading" => esc_html__("API Key", "glacier"),
                "value" => "AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw",
                "group" => "General"
            ),

            // Style
            array(
                "type" => "textfield",
                "param_name" => "width_map",
                "heading" => esc_html__( "Width", "glacier" ),
                "value" => "100%",
                "group" => "Style"
            ),
            array(
                "type" => "textfield",
                "param_name" => "height_map",
                "heading" => esc_html__( "Height", "glacier" ),
                "value" => "450px",
                "group" => "Style"
            ),
            array(
                "type" => "textfield",
                "param_name" => "saturation",
                "heading" => esc_html__("Saturation", "glacier"),
                "value" => "-70",
                "group" => "Style"
            ),
            array(
                "type" => "textfield",
                "param_name" => "brightness",
                "heading" => esc_html__("Brightness", "glacier"),
                "value" => "5",
                "group" => "Style"
            ),
            array(
                "type" => "colorpicker",
                "param_name" => "map_color",
                "heading" => esc_html__( "Color Map", "glacier" ),
                "value" => "#2d313f",
                "group" => "Style"
            ),

            // Map Marker
            array(
                "type" => "checkbox",
                "heading" => esc_html__( "Hide Map Marker", "glacier" ),
                "param_name" => "visible_map_marker",
                "value"  => array( "" => true ),
                "group" => "Map Marker"
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__("Map Marker", "glacier"),
                "param_name" => 'map_img',
                "value" => "",
                "group" => "Map Marker"
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Title Marker", "glacier"),
                "param_name" => "title_marker",
                "value" => "Melbourne, Australia",
                "group" => "Map Marker"
            ),

            // Zoom
            array(
                "type" => "checkbox",
                "heading" => esc_html__( "Hide Zoom", "glacier" ),
                "param_name" => "visible_zoom",
                "value"  => array( "" => true ),
                "group" => "Zoom"
            ),
            array(
                "type" => "colorpicker",
                "param_name" => "bg_zoom",
                "heading" => esc_html__( "Background zoom", "glacier" ),
                "value" => "rgba(0, 0, 0, 0.7)",
                "group" => "Zoom"
            ),
            array(
                "type" => "colorpicker",
                "param_name" => "bg_zoom_hover",
                "heading" => esc_html__( "Background hover zoom", "glacier" ),
                "value" => "#000000",
                "group" => "Zoom"
            ),

            // Info Box
            array(
                "type" => "checkbox",
                "heading" => esc_html__( "Hide Info Box", "glacier" ),
                "param_name" => "visible_info_box",
                "value"  => array( "" => true ),
                "group" => "Info Box"
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Icon library", "glacier" ),
                "value" => array(
                  esc_html__( "Font Awesome", "glacier" ) => "fontawesome",
                ),
                "admin_label" => false,
                "param_name" => "type",
                "description" => "",
                "group" => "Info Box"
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Title", "glacier"),
                "param_name" => "title",
                "value" => "CONTACT INFORMATION.",
                "group" => "Info Box"
            ),
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Icon Address", "glacier" ),
                "param_name" => "icon_address",
                "value" => "fa fa-map-marker", // default value to backend editor admin_label
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
                "group" => "Info Box"
            ), 
            array(
                "type" => "textfield",
                "heading" => esc_html__("Address", "glacier"),
                "param_name" => "address",
                "value" => "Melbourne, Australia",
                "group" => "Info Box"
            ),
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Icon Phone", "glacier" ),
                "param_name" => "icon_phone",
                "value" => "fa fa-phone", // default value to backend editor admin_label
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
                "group" => "Info Box"
            ), 
            array(
                "type" => "textfield",
                "heading" => esc_html__("Phone", "glacier"),
                "param_name" => "phone",
                "value" => "765-302-2878",
                "group" => "Info Box"
            ),
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Icon Email", "glacier" ),
                "param_name" => "icon_email",
                "value" => "fa fa-envelope-o", // default value to backend editor admin_label
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
                "group" => "Info Box"
            ), 
            array(
                "type" => "textfield",
                "heading" => esc_html__("Email Link", "glacier"),
                "param_name" => "email_link",
                "value" => "mailto:name@domain.com",
                "group" => "Info Box"
            ),
            array(
                "type" => "checkbox",
                "heading" => esc_html__( "Hide target attribute in Email", "glacier" ),
                "param_name" => "visible_target_email",
                "value"  => array( "" => true ),
                "group" => "Info Box"
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Email", "glacier"),
                "param_name" => "email",
                "value" => "name@domain.com",
                "group" => "Info Box"
            ),
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Icon Website", "glacier" ),
                "param_name" => "icon_website",
                "value" => "fa fa-globe", // default value to backend editor admin_label
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
                "group" => "Info Box"
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Website Link", "glacier"),
                "param_name" => "website_link",
                "value" => "mycompanyname.com",
                "group" => "Info Box"
            ),
            array(
                "type" => "checkbox",
                "heading" => esc_html__( "Hide target attribute in Website", "glacier" ),
                "param_name" => "visible_target_website",
                "value"  => array( "" => true ),
                "group" => "Info Box"
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Website", "glacier"),
                "param_name" => "website",
                "value" => "mycompanyname.com",
                "group" => "Info Box"
            )
        )
    ));
}