<?php
function fdctheme_custom_styles()
{

    require_once(get_template_directory() . '/lib/variables/variables.php');

    $custom = '';

    $font_content_family = get_theme_mod('font_content_family');
    $font_content_size = get_theme_mod('font_content_size');
    $font_content_weight = get_theme_mod('font_content_weight');
    $font_content_color = get_theme_mod('font_content_color', '#000000');

    $font_link_color = get_theme_mod('font_link_color', '#ededed');
    $font_link_color_hover = get_theme_mod('font_link_color_hover', '#2d2d2d');

    $font_title_family = get_theme_mod('font_title_family', 'Open Sans');
    $font_title_size = get_theme_mod('font_title_size', '20');
    $font_title_weight = get_theme_mod('font_title_weight', 400);
    $font_title_color = get_theme_mod('font_title_color', '#000000');

    $font_action_bar_family = get_theme_mod('font_action_bar_family');
    $font_action_bar_size = get_theme_mod('font_action_bar_size');
    $font_action_bar_weight = get_theme_mod('font_action_bar_weight');

    $font_top_menu_family = get_theme_mod('font_menu_family');
    $font_top_menu_size = get_theme_mod('font_menu_size');
    $font_top_menu_weight = get_theme_mod('font_menu_weight');

    $chevron_down_color = get_theme_mod('chevron_down_color', '#ffffff');

    $buttons_type = get_theme_mod('buttons_type', 'buttons_1');
    $buttons_background_color = get_theme_mod('buttons_background_color', '#ffffff');
    $buttons_color = get_theme_mod('buttons_color', '#000000');
    $buttons_background_color_hover = get_theme_mod('buttons_background_color_hover', '#efefef');
    $buttons_color_hover = get_theme_mod('buttons_color_hover', '#050505');
    $buttons_border_color = get_theme_mod('buttons_border_color', '#000000');


    $layout_boxed = get_theme_mod('layout_boxed_enable');
    $layout_width = get_theme_mod('layout_width');
    $action_bar_background = get_theme_mod('action_bar_background');
    $action_bar_color = get_theme_mod('action_bar_color');
    $action_bar_color_hover = get_theme_mod('action_bar_color_hover');
    $body_background_color = get_theme_mod('body_background_color');
    $body_background_image = get_theme_mod('body_background_image');
    $body_background_size = get_theme_mod('body_background_size');
    $body_background_repeat = get_theme_mod('body_background_repeat');
    $body_background_position_x = get_theme_mod('body_background_position_x');
    $body_background_position_y = get_theme_mod('body_background_position_y');
    $body_background_blur = get_theme_mod('body_background_blur');
    $wrapper_background_color = get_theme_mod('wrapper_background_color');
    $header_background_color = get_theme_mod('header_background_color');
    $onepage_enable = get_theme_mod('onepage_enable');
    $mobile_menu_color = get_theme_mod('mobile_menu_color');
    $footer_background_color = get_theme_mod('footer_background_color');
    $footer_background_image = get_theme_mod('footer_background_image');
    $footer_background_size = get_theme_mod('footer_background_size');
    $footer_background_repeat = get_theme_mod('footer_background_repeat');
    $footer_background_position_x = get_theme_mod('footer_background_position_x');
    $footer_background_position_y = get_theme_mod('footer_background_position_y');
    $back_to_top_enable = get_theme_mod('back_to_top_enable');
    $back_to_top_style = get_theme_mod('back_to_top_style');
    $back_to_top_background_color = get_theme_mod('back_to_top_background_color');
    $back_to_top_color = get_theme_mod('back_to_top_color');
    $back_to_top_hover_color = get_theme_mod('back_to_top_hover_color');
    $header_height = get_theme_mod('header_height', 600);

    $main_menu_color = get_theme_mod('main_menu_color', '#ffffff');
    $main_menu_color_hover = get_theme_mod('main_menu_color_hover', '#ffffff');

    $h1_color = get_theme_mod('h1_color', '#000000');
    $h2_color = get_theme_mod('h2_color', '#000000');
    $h3_color = get_theme_mod('h3_color', '#000000');
    $h4_color = get_theme_mod('h4_color', '#000000');
    $h5_color = get_theme_mod('h5_color', '#000000');
    $h6_color = get_theme_mod('h6_color', '#000000');


    if ($layout_boxed) {
        $custom .= '#wrapper{max-width:' . $layout_width . 'px; overflow: hidden; margin: 0 auto;}';
    }

    if ($onepage_enable) {
        //$custom .= 'html{ scroll-behavior: smooth;}';
    }

    if ($back_to_top_style == 'circle' || $back_to_top_style == 'square') {
        $custom .= '.back-to-top{display:block; position: absolute; margin-top: -25px; left: 0; right: 0; margin: -25px auto;}';
    }

    if ($back_to_top_style == 'circle') {
        $custom .= '.back-to-top{border-radius:50px}';
    }

    if ($back_to_top_style == 'fixed') {
        $custom .= '.back-to-top{display:none; position: fixed; right: 20px; bottom: 20px; z-index: 99999;}';
    }

    if ($footer_background_image != '') {
        $custom .= '.footer{background-image:url(' . $footer_background_image . ');  background-size: ' . $footer_background_size . '; background-repeat:' . $footer_background_repeat . '; background-position-x:' . $footer_background_position_x . '; background-position-y:' . $footer_background_position_y . ';}';
    }

    if ($buttons_type == 'buttons_1') {
        $custom .= 'body .btn{font-family: inherit; font-size: inherit; background: none !important; cursor: pointer; padding: 15px 25px; display: inline-block; text-transform: uppercase; letter-spacing: 1px; font-weight: 700; outline: none; position: relative; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; border: 3px solid}';
        $custom .= 'body .btn:after {width: 0%;height: 100%; top: 0;left: 0;}';
        $custom .= 'body .btn:hover:after {width: 100%;}';
    }

    if ($buttons_type == 'buttons_2') {
    }

    if ($buttons_type == 'buttons_3') {
    }

    $custom .= 'body .btn{background-color:' . $buttons_background_color . ';color:' . $buttons_color . ';border-color:' . $buttons_border_color . '}';
    $custom .= 'body .btn:after{background-color:' . $buttons_background_color_hover . ';}';
    $custom .= 'body .btn:hover{color:' . $buttons_color_hover . ';}';

    $custom .= 'body:before{background-color:' . $body_background_color . '!important; background-image:url(' . $body_background_image . ');  background-size: ' . $body_background_size . '; background-repeat:' . $body_background_repeat . '; background-position-x:' . $body_background_position_x . '; background-position-y:' . $body_background_position_y . '; filter: blur(' . $body_background_blur . 'px); -webkit-filter: blur(' . $body_background_blur . 'px); }';
    $custom .= '#wrapper{background-color:' . $wrapper_background_color . '}';

    for ($i = 1; $i <= 6; $i++) {
        $custom .= 'h' . $i . ' {font-family:' . get_theme_mod('font_h' . $i . '_family', $font_defaults[$i][0]) . '; font-size:' . get_theme_mod('font_h' . $i . '_size', $font_defaults[$i][1]) . 'px !important; font-weight:' . get_theme_mod('font_h' . $i . '_weight', $font_defaults[$i][2]) . '!important; letter-spacing:' . get_theme_mod('font_h' . $i . '_spacing', $font_defaults[$i][3]) . 'pt}';
    }


    $custom .= 'p, ul, li {font-family:' . $font_content_family . '; font-size:' . $font_content_size . 'px;  font-weight:' . $font_content_weight . '; color:' . $font_content_color . ';}';
    $custom .= 'body a {font-family:' . $font_content_family . '; font-size:' . $font_content_size . 'px;  font-weight:' . $font_content_weight . '; color:' . $font_link_color . ';}';
    $custom .= 'body a:hover {color:' . $font_link_color_hover . ';}';
    $custom .= 'body #wrapper {font-family:' . $font_content_family . '; font-size:' . $font_content_size . 'px;  font-weight:' . $font_content_weight . '}';

    $custom .= '.actionbar{background-color:' . $action_bar_background . '}';
    $custom .= '.actionbar a, .actionbar p{font-family:' . $font_action_bar_family . '; font-size:' . $font_action_bar_size . 'px; font-weight:' . $font_action_bar_weight . ';}';
    $custom .= '.actionbar a, .actionbar p{color:' . $action_bar_color . '}';
    $custom .= '.actionbar a:hover{color:' . $action_bar_color_hover . '}';
    $custom .= '.entry-header {height:' . $header_height . 'px;}';
    $custom .= '.entry-title {font-family:' . $font_title_family . '; font-size:' . $font_title_size . 'px !important; font-weight:' . $font_title_weight . '!important; color:' . $font_title_color . '!important; }';
    $custom .= '.read-down a {color:' . $chevron_down_color . '!important;}';
    $custom .= '.navbar-toggler-icon .fa-bars{color:' . $mobile_menu_color . '}';
    $custom .= '.navbar-toggler .fa-bars{color:' . $mobile_menu_color . '}';
    $custom .= '.navbar{background-color:' . $header_background_color . ';}';
    $custom .= '.footer{background-color:' . $footer_background_color . ';}';
    $custom .= '.back-to-top{background-color:' . $back_to_top_background_color . ';}';
    $custom .= '.back-to-top{color:' . $back_to_top_color . ';}';
    $custom .= '.back-to-top:hover{color:' . $back_to_top_hover_color . ';}';

    $custom .= '.navbar-nav li a {color:' . $main_menu_color . ';}';
    $custom .= '.navbar-nav li a:hover {color:' . $main_menu_color_hover . ';}';
    $custom .= '.navbar-nav li a{font-family:' . $font_top_menu_family . '; font-size:' . $font_top_menu_size . 'px; font-weight:' . $font_top_menu_weight . ';}';

    $custom .= 'h1{color:' . $h1_color . ';}';
    $custom .= 'h2{color:' . $h2_color . ';}';
    $custom .= 'h3{color:' . $h3_color . ';}';
    $custom .= 'h4{color:' . $h4_color . ';}';
    $custom .= 'h5{color:' . $h5_color . ';}';
    $custom .= 'h6{color:' . $h6_color . ';}';


    wp_add_inline_style('fdc-style', $custom);
}

add_action('wp_enqueue_scripts', 'fdctheme_custom_styles');


function fdctheme_custom_css_variables()
{

    $primary_color = get_theme_mod('css_primary_color', 'black');
    $secondary_color = get_theme_mod('css_secondary_color', 'black');
    $third_color = get_theme_mod('css_third_color', 'black');
    $fourth_color = get_theme_mod('css_fourth_color', 'black');

    $custom = '';
    $custom .= ':root {
    --primary-color: ' . $primary_color . ';
    --secondary-color: ' . $secondary_color . ';
    --third-color: ' . $third_color . ';
    --fourth-color: ' . $fourth_color . ';
    }';
    wp_add_inline_style('fdc-css-variables', $custom);
}

add_action('wp_enqueue_scripts', 'fdctheme_custom_css_variables');
