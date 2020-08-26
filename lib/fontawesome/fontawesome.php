<?php
if (!defined('ABSPATH')) exit;

if (!class_exists('FDC_FA_Icon_list')) {

    class FDC_FA_Icon_list
    {

        private $shortcode;

        function __construct()
        {

            /* shortcode base */
            $this->shortcode = 'fdc_fa_icon_list';

            add_action('init', array($this, 'fdc_map_shortcode'));
            add_shortcode($this->shortcode, array($this, 'fdc_create_shortcode'));

        }

        function fdc_map_shortcode($atts, $content = NULL)
        {

            if (function_exists('vc_map')) {

                vc_map(
                    array(
                        'name' => esc_html__('Font Awesome Icon', 'fdc_shortcodes'),
                        //'icon'            => fdc_SHORTCODES_URL . '/admin/img/vc_icons/fancy-list.png',
                        'base' => $this->shortcode,
                        'category' => 'Structual',
                        'class' => 'fdc-vc-icon-module fdc-structual-module',
                        'content_element' => true,
                        'params' => array(

                            array(
                                'type' => 'textfield',
                                'heading' => esc_html__('Description', 'fdc_shortcodes'),
                                'description' => esc_html__('Only for internal use. This adds a label to Visual Composer for an easier element identification.', 'fdc_shortcodes'),
                                'param_name' => 'list_description',
                                'admin_label' => true,
                                'group' => 'General'
                            ),
                            array(
                                'type' => 'iconpicker',
                                'heading' => __('Icon', 'js_composer'),
                                'param_name' => 'icon_fontawesome',
                                'value' => 'fa fa-adjust',
                                'group' => 'General',
                                'settings' => array(
                                    'emptyIcon' => false,
                                    'type' => 'fontawesome',
                                    'iconsPerPage' => 4000,
                                ),
                                'dependency' => array(
                                    'element' => 'type',
                                    'value' => 'fontawesome',
                                ),
                                'description' => __('Select icon from library.', 'js_composer'),
                            ),
                            array(
                                'type' => 'css_editor',
                                'param_name' => 'css',
                                'group' => esc_html__('Design Options', 'fdc_shortcodes'),
                            ),


                        )

                    )

                ); /* end mapping */

            }

        }

        function fdc_create_shortcode($atts, $content = NULL)
        {

            extract(shortcode_atts(array(
                'icon_fontawesome' => '',
                'css' => ''
            ), $atts));


            /* extract list items */
            if (function_exists('vc_param_group_parse_atts') && !empty($values)) {

                $values = vc_param_group_parse_atts($values);

            }

            $output = '';
            $output .= '<i class="' . $icon_fontawesome . '"></i>';
            return $output;


            /* unique listz ID */

            /*$id = uniqid("fdc_fa_");

            $output = '';

            $output .= '<div id="' . esc_attr($id) . '">';

            $output .= '<i class="' . $icon_fontawesome . '"></i>';
            $output .= '</div>';


            return '<div class="wpb_content_element ' . apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '), $this->shortcode, $atts) . '">' . $output . '</div>';
            */

        }

    }

}

new FDC_FA_Icon_list;