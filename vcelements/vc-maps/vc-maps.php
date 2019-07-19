<?php
/*
Element Description: VC Info Box
*/

if (class_exists('WPBakeryShortCode')) {
// Element Class

    /*
    Element Description: Directory
    */

// Element Class
    class vcInfoBox extends WPBakeryShortCode
    {

        // Element Init
        function __construct()
        {
            add_action('init', array($this, 'vc_infobox_mapping'));
            add_shortcode('vc_infobox', array($this, 'vc_infobox_html'));
        }

        // Element Mapping
        public function vc_infobox_mapping()
        {


            // Stop all if VC is not enabled
            if (!defined('WPB_VC_VERSION')) {
                return;
            }

            // Map the block with vc_map()
            vc_map(
                array(
                    'name' => __('Listing', 'text-domain'),
                    'base' => 'vc_infobox',
                    'class' => 'wpc-text-class',
                    'description' => __('Add new listing', 'fdctheme'),
                    'category' => __('FDC Theme', 'fdctheme'),
                    'icon' => plugin_dir_path(__FILE__) . 'assets/img/note.png',
                    'params' => array(

                        array(
                            'type' => 'textfield',
                            'holder' => 'p',
                            'class' => 'title-class',
                            'heading' => __('Id', 'fdctheme'),
                            'param_name' => 'id',
                            'value' => __('googlemaps-1', 'fdctheme'),
                            'admin_label' => false,
                            'weight' => 0,
                            'group' => 'Listing',
                        ),

                        array(
                            'type' => 'attach_image',
                            'holder' => 'img',
                            //'class' => 'text-class',
                            'heading' => __('Icon', 'fdctheme'),
                            'param_name' => 'bgimg',
                            // 'value' => __( 'Default value', 'text-domain' ),
                            'admin_label' => false,
                            'weight' => 0,
                            'group' => 'Listing',
                        ),

                        array(
                            'type' => 'textfield',
                            'holder' => 'p',
                            'class' => 'title-class',
                            'heading' => __('Latitude', 'fdctheme'),
                            'param_name' => 'latitude',
                            'value' => __('', 'fdctheme'),
                            'admin_label' => false,
                            'weight' => 0,
                            'group' => 'Listing',
                        ),


                        array(
                            'type' => 'textfield',
                            'holder' => 'p',
                            'class' => 'title-class',
                            'heading' => __('Longitude', 'fdctheme'),
                            'param_name' => 'longitude',
                            'value' => __('', 'fdctheme'),
                            'admin_label' => false,
                            'weight' => 0,
                            'group' => 'Listing',
                        ),

                        array(
                            'type' => 'dropdown',
                            'heading' => __('Zoom', 'fdctheme'),
                            'param_name' => 'zoom',
                            'admin_label' => false,
                            'value' => array(
                                '12' => '12',
                                '13' => '13',
                                '14' => '14',
                                '15' => '15',
                                '16' => '16',
                                '17' => '17',
                                '18' => '18',
                                '19' => '19',
                                '20' => '20',
                            ),
                            'std' => '15', // Your default value
                            //'description' => __('Zoom','fdctheme'),
                            'group' => 'Listing',
                        ),

                        array(
                            'type' => 'dropdown',
                            'heading' => __('Design', 'fdctheme'),
                            'param_name' => 'design',
                            'admin_label' => true,
                            'value' => array(
                                'Standard' => 'Standard',
                                'Light' => 'Light',
                                'Dark' => 'Dark'
                            ),
                            'std' => 'Standard', // Your default value
                            //'description' => __('Zoom','fdctheme'),
                            'group' => 'Listing',
                        ),

                        array(
                            'type' => 'textarea',
                            'holder' => 'div',
                            'class' => 'wpc-text-class',
                            'admin_label' => false,
                            'heading' => __('Description', 'fdctheme'),
                            'param_name' => 'content',
                            'value' => __('', 'fdctheme'),
                            'description' => __('To add link highlight text or url and click the chain to apply hyperlink', 'text-domain'),
                            // 'admin_label' => false,
                            // 'weight' => 0,
                            'group' => 'Listing',
                        ),

                    ),
                )
            );

        }

        // Element HTML
        public function vc_infobox_html($atts, $content)
        {

            include('style-light.php');
            include('style-dark.php');
            include('style-standard.php');

            // Params extraction
            extract(
                shortcode_atts(
                    array(
                        'id' => 'googlemaps-1',
                        'bgimg' => 'bgimg',
                        'title' => '',
                        'latitude' => '',
                        'longitude' => '',
                        'zoom' => '15',
                        'design' => ''
                    ),
                    $atts
                )
            );

            $toreplace = ['``', '`{`', '`}`', '<br />'];
            $withreplace = ['"', '[', ']', ''];

            $design = str_replace($toreplace, $withreplace, $design);

            $img_url = wp_get_attachment_image_src($bgimg, "large");
            $gmaps_key = get_theme_mod('google_api_key');

            switch ($design) {
                case 'Light':
                    $design = $light;
                    break;
                case 'Dark':
                    $design = $dark;
                    break;

                default:
                    $design = $standard;
                    break;
            }

            if (!isset($img_url[0])) {
                $img_url[0] = "https://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png";
            }


            // Fill $html var with data
            $html = '
        <div class="' . $id . '">
        </div>
            
<script>
var $ = jQuery.noConflict();

$(document).ready(function() {
    var myMap;
    var myLatlng = new google.maps.LatLng(' . $latitude . ',' . $longitude . ');
    var id = \'' . $id . '\';
    console.log(myMap + \' \' + myLatlng + \' \' + id);
    
    $(\'.\'+id+\'\').append(\'<div id=\'+id+\' style=\"width:500px; height: 500px\">BBB</div>\');
    
    var mapOptions = {
            zoom: ' . $zoom . ',
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: ' . $design . '
    };
    

    
    
    
     myMap = new google.maps.Map(document.getElementById(id),mapOptions);
    
  
        var marker = new google.maps.Marker({
         position: myLatlng,
         map: myMap,
         title: \'Name Of Business\',
         icon: \'' . $img_url[0] . '\'
    });

      
      });
    
</script>';



            return $html;
        }

    } // End Element Class

// Element Class Init
    new vcInfoBox();
}



/***
 *
 *
 *
 *
 *var myMap;
 * var myLatlng = new google.maps.LatLng(' . $latitude . ',' . $longitude . ');
 * var id = \''.$id.'\';
 *
 * console.log(id);
 *
 *
 * function initialize() {
 *
 * var mapOptions = {
 * zoom: ' . $zoom . ',
 * center: myLatlng,
 * mapTypeId: google.maps.MapTypeId.ROADMAP,
 * scrollwheel: false,
 * styles: ' . $design . '
 * }
 * myMap = new google.maps.Map(document.getElementById(id), mapOptions);
 * var marker = new google.maps.Marker({
 * position: myLatlng,
 * map: myMap,
 * title: \'Name Of Business\',
 * icon: \''.$img_url[0].'\'
 * });
 * }
 * google.maps.event.addDomListener(window, \'load\', initialize);
 *
 * document.write("<div id="+id+" style=\"width:500px; height: 500px;\"></div>");
 *
 *
 */