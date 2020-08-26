<?php

include "autoload.php";

/**
 * ADD BS4 NAV WALER LIBRARY
 */
require_once('lib/bs4navwalker/bs4navwalker.php');


/**
 * ADD STYLES to THEMES
 */

function fdc_styles()
{
    wp_enqueue_style('fdc-style', get_stylesheet_directory_uri() . '/assets/css/custom.css', NULL, microtime());
    wp_enqueue_style('fdc-css-variables', get_stylesheet_directory_uri() . '/assets/css/variables.css', NULL, microtime());
    wp_enqueue_style('fdc-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('fdc-fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');

}

add_action('wp_enqueue_scripts', 'fdc_styles');

/**
 * ADD SCRIPTS to THEMES
 */

function fdc_scripts()
{
    wp_enqueue_script('fdc-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js', array(jquery), '1.0.0', true);
    wp_enqueue_script('fdc-script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array(jquery), '1.0.0', true);
    wp_enqueue_script('fdc-google-maps', 'https://maps.googleapis.com/maps/api/js?key=' . $gmaps_key = get_theme_mod('google_api_key'), '', '');
}

add_action('wp_enqueue_scripts', 'fdc_scripts');


/**
 *
 * REGISTER MENUS
 *
 */

add_theme_support('menus');

register_nav_menus(array(
    'main_menu' => __('Main Menu'),
    'secondary_menu' => __('Secondary Menu'),
    'footer_menu' => __('Footer Menu')
));


/**
 *
 * REGISTER SIDEBAR
 *
 */

function fdctheme_widgets_init()
{
    register_sidebar(
        array(
            'name' => __('Sidebar 1', 'fdctheme'),
            'id' => 'sidebar-1',
            'description' => __('Add widgets here to appear in your sidebar.', 'fdctheme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Sidebar 2', 'fdctheme'),
            'id' => 'sidebar-2',
            'description' => __('Add widgets here to appear in your sidebar', 'fdctheme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );

}

add_action('widgets_init', 'fdctheme_widgets_init');

/**
 * REGISTER THUMBNAIL
 */

add_theme_support('post-thumbnails');


/**
 * ADD NEW API SECTION CUSTOMIZER
 */

function fdctheme_customizer_register($wp_customize)
{
    require_once(get_template_directory() . '/options/general.php');
    require_once(get_template_directory() . '/options/header.php');
    require_once(get_template_directory() . '/options/actionbar.php');
    require_once(get_template_directory() . '/options/social.php');
    require_once(get_template_directory() . '/options/fonts.php');
    require_once(get_template_directory() . '/options/logo.php');
    require_once(get_template_directory() . '/options/contacts.php');
    require_once(get_template_directory() . '/options/layout.php');
    require_once(get_template_directory() . '/options/colors.php');
}

add_action('customize_register', 'fdctheme_customizer_register');


function fdctheme_custom_styles()
{

    $content_font = get_theme_mod('main_google_font_list');
    $content_font_size = get_theme_mod('main_google_font_size');
    $font_title_family = get_theme_mod('font_title_family');
    $font_title_size = get_theme_mod('font_title_size');
    $font_title_weight = get_theme_mod('font_title_weight');
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


    $custom = '';
    if ($layout_boxed) {
        $custom .= '#wrapper{max-width:' . $layout_width . 'px; overflow: hidden; margin: 0 auto;}';
    }

    if ($onepage_enable) {
        $custom .= 'html{ scroll-behavior: smooth;}';
    }

    $custom .= 'body:before{background-color:' . $body_background_color . '!important; background-image:url(' . $body_background_image . ');  background-size: ' . $body_background_size . '; background-repeat:' . $body_background_repeat . '; background-position-x:' . $body_background_position_x . '; background-position-y:' . $body_background_position_y . '; filter: blur(' . $body_background_blur . 'px); -webkit-filter: blur(' . $body_background_blur . 'px); }';
    $custom .= '#wrapper{background-color:' . $wrapper_background_color . '}';
    $custom .= 'h1, h2, h3, h4, h5, h6 {font-family:' . $content_font . '; font-size:' . $content_font_size . 'px}';
    $custom .= 'p, a {font-family:' . $font_title_family . '; font-size:' . $font_title_size . 'px;  font-weight:' . $font_title_weight .';}';
    $custom .= '.actionbar{background-color:' . $action_bar_background . '}';
    $custom .= '.actionbar a, .actionbar p{color:' . $action_bar_color . '}';
    $custom .= '.actionbar a:hover{color:' . $action_bar_color_hover . '}';
    $custom .= '.navbar-toggler-icon .fa-bars{color:'.$mobile_menu_color.'}';
    $custom .= '.navbar{background-color:' . $header_background_color . '}';



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

/**
 * ------------------------------------------------------------
 * BLOCKS: WP Gutenberg Blocks
 * ------------------------------------------------------------
 **/

require_once(get_template_directory() . '/blocks/blocks.php');


/**
 * ------------------------------------------------------------
 * ADD BODY CLASS
 * ------------------------------------------------------------
 **/
add_filter('body_class', function ($classes) {
    return array_merge($classes, array(get_theme_mod('header_type')));
});


add_filter('post_class', function ($classes) {
    return array_merge($classes, array('container'));
});

add_filter('body_class', function ($classes) {

    if (get_theme_mod('page_layout_type') == 'sidebar_left' && is_active_sidebar('sidebar-1')) {
        return array_merge($classes, array('with_aside aside_left'));
    } else if (get_theme_mod('page_layout_type') == 'sidebar_right' && is_active_sidebar('sidebar-2')) {
        return array_merge($classes, array('with_aside aside_right'));
    } else if (get_theme_mod('page_layout_type') == 'sidebar_both' && is_active_sidebar('sidebar-1') && is_active_sidebar('sidebar-2')) {
        return array_merge($classes, array('with_bside'));
    } else {
        return array_merge($classes, array('full_width'));
    }
});


require_once('metabox/metabox.php');


/********* Google Fonts URL function  ***********/
if (!function_exists('fdctheme_fonts_url')) {
    function fdctheme_fonts_url()
    {
        $fonts_url = '';
        $content_font = get_theme_mod('main_google_font_list', '');
        $title_font = get_theme_mod('font_title_family', '');
        $header_font = get_theme_mod('header_google_font_list', '');
        // Translators: If there are characters in your language that are not supported by Google font, translate it to 'off'. Do not translate into your own language.
        // $content_font = _x( 'on', ''.$content_font.' font: on or off', 'yourtheme' );
        // $header_font = _x( 'on', ''.$header_font.' font: on or off', 'yourtheme' );

        if ('off' !== $content_font || 'off' !== $header_font || 'off' !== $title_font) {
            $font_families = array();

            if ('off' !== $content_font) {
                $font_families[] = $content_font;
            }

            if ('off' !== $title_font) {
                $font_families[] = $title_font;
            }

            if ('off' !== $header_font) {
                $font_families[] = $header_font;
            }

            $query_args = array(
                'family' => urlencode(implode('|', array_unique($font_families))),
            );

            $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
        }

        return esc_url_raw($fonts_url);
    }
}

add_action('wp_enqueue_scripts', 'fdc_google_fonts');

function fdc_google_fonts()
{
    wp_enqueue_style('fdc-google-fonts', fdctheme_fonts_url(), array(), null);
}


// Before VC Init
add_action('vc_before_init', 'vc_before_init_actions');

function vc_before_init_actions()
{
    // Require new custom Element
    require_once(get_template_directory() . '/vcelements/vc-maps/vc-maps.php');

}

