<?php

include "autoload.php";


/**
 * ADD LIBRARY
 */
require_once('lib/bs4navwalker/bs4navwalker.php');
require_once('lib/prefixseparator/Prefix_Separator_Control.php');
require_once('lib/sectiontitle/Section_Title_Control.php');


/**
 * ADD STYLES to THEMES
 */

function fdc_styles()
{
    wp_enqueue_style('fdc-style', get_stylesheet_directory_uri() . '/assets/css/custom.css', NULL, microtime());
    wp_enqueue_style('fdc-style-single', get_stylesheet_directory_uri() . '/assets/css/single.css', NULL, microtime());
    wp_enqueue_style('fdc-css-variables', get_stylesheet_directory_uri() . '/assets/css/variables.css', NULL, microtime());
    wp_enqueue_style('fdc-venobox-css', get_stylesheet_directory_uri() . '/import/venobox/venobox.css');
    wp_enqueue_style('fdc-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('fdc-fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');

    if (get_theme_mod('owl_carousel_plugin') == 1) {
        wp_enqueue_style('fdc-owl-carousel', get_stylesheet_directory_uri() . '/import/owlcarousel/css/owl.carousel.min.css');
        wp_enqueue_style('fdc-owl-theme', get_stylesheet_directory_uri() . '/import/owlcarousel/css/owl.theme.default.min.css');
    }


    if (get_theme_mod('supreme_icons_plugin') == 1) {
        wp_enqueue_style('fdc-supreme-icons', get_stylesheet_directory_uri() . '/import/supremeicons/css/supreme-icons.css');
    }

    if (get_theme_mod('supreme_icons_plugin') == 1) {
        wp_enqueue_style('fdc-supreme-icons', get_stylesheet_directory_uri() . '/import/supremeicons/css/supreme-icons.css');
    }

    if (get_theme_mod('fleurdesel_hotel_icons_plugin') == 1) {
        wp_enqueue_style('fdc-fleurdesel-hotel-icons', get_stylesheet_directory_uri() . '/import/fleurdeselhotelicons/css/font-fleurdeselhotel.css');
    }

    if (get_theme_mod('flaticon_plugin') == 1) {
        wp_enqueue_style('fdc-flaticon', get_stylesheet_directory_uri() . '/import/flaticon/css/flaticon.css');
    }

    if (get_theme_mod('page_layout_type') == 'full_page') {
        wp_enqueue_style('fdc-fullpage', get_stylesheet_directory_uri() . '/import/fullpage/css/fullpage.min.css');
    }


}

add_action('wp_enqueue_scripts', 'fdc_styles');

/**
 * ADD SCRIPTS to THEMES
 */

function fdc_scripts()
{
    wp_enqueue_script('fdc-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fdc-venobox-js', get_stylesheet_directory_uri() . '/import/venobox/venobox.js', array('jquery'), true);
    wp_enqueue_script('fdc-google-maps', 'https://maps.googleapis.com/maps/api/js?key=' . $gmaps_key = get_theme_mod('google_api_key'), '', '');

    if (get_theme_mod('owl_carousel_plugin') == 1) {
        wp_enqueue_script('fdc-owl-carousel-js', get_stylesheet_directory_uri() . '/import/owlcarousel/js/owl.carousel.min.js');
    }

    if (get_theme_mod('jquery_ui_plugin') == 1) {
        wp_enqueue_script('fdc-jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', array('jquery'), '1.12.1', true);
        wp_script_add_data('fdc-jquery-ui', array('integrity', 'crossorigin'), array('sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=', 'anonymous'));
    }

    if (get_theme_mod('page_layout_type') == 'full_page') {
        wp_enqueue_script('fdc-fullpage-js', get_stylesheet_directory_uri() . '/import/fullpage/js/fullpage.js');
        wp_enqueue_script('fdc-fullpage-extensions-js', get_stylesheet_directory_uri() . '/import/fullpage/js/fullpage.extensions.min.js');
        wp_enqueue_script('fdc-easing-js', get_stylesheet_directory_uri() . '/import/fullpage/js/easing.min.js');
        wp_enqueue_script('fdc-scrolloverflow-js', get_stylesheet_directory_uri() . '/import/fullpage/js/scrolloverflow.min.js');
    }

    wp_enqueue_script('fdc-script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
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
    require_once(get_template_directory() . '/options/buttons.php');
    require_once(get_template_directory() . '/options/social.php');
    require_once(get_template_directory() . '/options/extras.php');
    require_once(get_template_directory() . '/options/footer.php');
    require_once(get_template_directory() . '/options/fonts.php');
    require_once(get_template_directory() . '/options/logo.php');
    require_once(get_template_directory() . '/options/contacts.php');
    require_once(get_template_directory() . '/options/colors.php');
    require_once(get_template_directory() . '/options/seo.php');
    require_once(get_template_directory() . '/options/plugins.php');
}

add_action('customize_register', 'fdctheme_customizer_register');


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
require_once('metabox/header.php');


/********* Google Fonts URL function  ***********/
if (!function_exists('fdctheme_fonts_url')) {
    function fdctheme_fonts_url()
    {
        $font_defaults = array(
            null,
            array('Open Sans', 32, '700'),
            array('Open Sans', 28, '700'),
            array('Open Sans', 20, '400'),
            array('Open Sans', 18, '400'),
            array('Open Sans', 16, '400'),
            array('Open Sans', 12, '400'),
        );


        $fonts_url = '';
        $font_families = array();

        $font_title_family = get_theme_mod('font_title_family', 'Open Sans');
        array_push($font_families, $font_title_family);

        $font_content_family = get_theme_mod('font_content_family', 'Open Sans');
        array_push($font_families, $font_content_family);

        $font_menu_family = get_theme_mod('font_menu_family', 'Open Sans');
        array_push($font_families, $font_menu_family);

        $font_action_bar_family = get_theme_mod('font_action_bar_family', 'Open Sans');
        array_push($font_families, $font_action_bar_family);

        for ($i = 1; $i <= 6; $i++) {
            array_push($font_families, get_theme_mod('font_h' . $i . '_family', $font_defaults[$i][0]));
        }

        $query_args = array(
            'family' => urlencode(implode('|', array_unique($font_families))),
        );

        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');


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


function language_selector_flags()
{
    $languages = icl_get_languages('skip_missing=0&orderby=code&order=desc');
    if (!empty($languages)) {
        foreach ($languages as $l) {

            if (!$l['active']) echo '<a href="' . $l['url'] . '">';
            echo '<p id="' . $l['language_code'] . '">' . $l['language_code'] . '</p>';
            if (!$l['active']) echo '</a>';
        }
    }
}


function get_my_prod_select_1()
{
    $array = ['Service Type'];
    $categories = [];

    $args = array(
        'orderby' => 'name',
        'parent' => 0,
        'hierarchical' => 1,
        'style' => 'none',
        'taxonomy' => 'genres',
        'hide_empty' => 0,
        'depth' => 1,
        'title_li' => ''
    );


    $categories = get_categories($args);

    /*  $args = array(
        'hierarchical' => 1,
        'show_option_none' => '',
        'hide_empty' => 0,
        'parent' => 7,
        'taxonomy' => 'genres'
    );
    $categories = get_categories($args);*/

    //var_dump($categories);


    foreach ($categories as $cat) {
        array_push($array, $cat->name);
    }

    return $array;
}

add_filter('wpcf7_form_tag_data_option', function ($n, $options, $args) {

    if (in_array('my.data.select_1', $options)) {
        return get_my_prod_select_1();
    }
    // default - non applicare cambiamenti alle opzioni
    return null;
}, 10, 3);


function my_enqueue()
{

    wp_enqueue_script('ajax-script', get_template_directory_uri() . '/assets/js/ajax-script.js', array('jquery'));

    wp_localize_script(
        'ajax-script',
        'my_ajax_object',
        array('ajax_url' => admin_url('admin-ajax.php'))
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue');

function data_custom_ajax()
{
    $step = $_POST['step'];
    $custom_val = $_POST['text'];

    if ($step == 1) {

        if ($custom_val == 'Select') {
            echo json_encode(array("data_result" => []));
        } else {

            $category = get_terms('genres', array('name__like' => $custom_val));


            // controllo se la categoria ha sottocategorie


            if ($category[0]->parent == 0) {

               //var_dump("SONO NEGLI ITEMS");



                $argo = array(
                    'post_type' => 'fdc_custom_items',
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'genres',
                            'field' => 'slug',
                            'terms' => $category[0]->slug
                        )
                    ),
                );

                $post_type_query  = new WP_Query($argo);



                $posts_array      = $post_type_query->posts;
                //$post_title_array = wp_list_pluck($posts_array, 'post_title', 'ID');
                echo json_encode(array("data_result" => $posts_array));

                //print_r($posts_array);
            } else {

                $cat_id = $category[0]->term_id;

                $parents = get_ancestors( $cat_id, 'genres', 'taxonomy' );

                $top_level_cat = ( count( $parents ) > 1 ) ?
                    $parents[ count( $parents ) - 2 ] : // use the second parent category ID, or
                    array_pop( $parents );


                $args = array(
                    'hierarchical' => 1,
                    'show_option_none' => '',
                    'hide_empty' => false,
                    'parent' => $top_level_cat,
                    'taxonomy' => 'genres'
                );



                $categories = get_categories($args);


                echo json_encode(array("data_result" => $categories));

                //print_r($categories);
            }
        }
        die();
    } else {

        //var_dump("AAAAAAA");

        $select_1 = $_POST['select_1'];
        $select_2 = $_POST['select_2'];

        $parent_category = get_terms('genres', array('name__like' => $select_1));

        $cat_id = $parent_category[0]->term_id;

        $parents = get_ancestors( $cat_id, 'genres', 'taxonomy' );

        $top_level_cat = ( count( $parents ) > 1 ) ?
            $parents[ count( $parents ) - 2 ] : // use the second parent category ID, or
            array_pop( $parents );


        $args = array(
            'hierarchical' => 1,
            'show_option_none' => '',
            'hide_empty' => 0,
            'parent' => $top_level_cat,
            'taxonomy' => 'genres'
        );

        $categories = get_categories($args);

        $child_category = '';

        for ($i = 0; $i <= count($categories); $i++) {
            if ($categories[$i]->name == $select_2) {
                $child_category = $categories[$i]->slug;
            }
        }

        $argo = array(
            'post_type' => 'fdc_custom_items',
            'post_status' => 'publish',
            'orderby' => 'rand',
            'tax_query' => array(
                array(
                    'taxonomy' => 'genres',
                    'field' => 'slug',
                    'terms' => $child_category
                )
            ),
        );

        $post_type_query  = new WP_Query($argo);
        $posts_array      = $post_type_query->posts;
        $post_title_array = wp_list_pluck($posts_array, 'post_title', 'ID');

        //print_r($post_title_array);

        echo json_encode(array("data_result" => $post_title_array));

        die();
    }
}
add_action('wp_ajax_nopriv_data_custom_ajax', 'data_custom_ajax');
add_action('wp_ajax_data_custom_ajax', 'data_custom_ajax');


add_filter('wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2);

function custom_email_confirmation_validation_filter($result, $tag)
{
    if ('your-email-confirm' == $tag->name) {
        $your_email = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
        $your_email_confirm = isset($_POST['your-email-confirm']) ? trim($_POST['your-email-confirm']) : '';

        if ($your_email != $your_email_confirm) {
            $result->invalidate($tag, "Are you sure this is the correct address?");
        }
    }

    return $result;
}


/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path('lib/fontawesome/fontawesome.php');
require get_parent_theme_file_path('/lib/themefunctions/themefunctions.php');
require get_parent_theme_file_path('lib/themestyle/themestyle.php');
require get_parent_theme_file_path('lib/breadcrumbs/breadcrumbs.php');

