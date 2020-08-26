<?php
/**
 * The template for displaying header part
 *
 * @package WordPress
 * @subpackage FDC Theme
 * @since 1.0
 * @version 1.0
 */

include('lib/variables/variables.php');

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php
    if ((!get_theme_mod('seo_external_plugin'))) {
        if (get_theme_mod('meta_description') != '') echo '<meta name="description" content="' . get_theme_mod('meta_description') . '">';
        if (get_theme_mod('meta_keywords') != '') echo '<meta name="keywords" content="' . get_theme_mod('meta_keywords') . '">';
    }
    if (get_theme_mod('favicon') != '') echo ' <link rel="shortcut icon" href="' . get_theme_mod('favicon') . '" />';
    if (get_theme_mod('apple_touch_icon') != '') echo ' <link rel="apple-touch-icon" href="' . get_theme_mod('apple_touch_icon') . '" />';

    if (get_theme_mod('google_analytics') != '') echo get_theme_mod('google_analytics');

    ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <title><?php bloginfo('name') ?> - <?php bloginfo('description') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div id="wrapper" >

    <?php if (get_theme_mod('page_layout_type') == 'full_page') {

    } else {
        get_template_part('includes/actionbar/actionbar', 'actionbar');

        ?>

        <?php
        if (get_theme_mod('header_type') == 'header_1') {
            get_template_part('includes/header/header_1', 'header_1');
        } else if (get_theme_mod('header_type') == 'header_2') {
            get_template_part('includes/header/header_2', 'header_2');
        } else if (get_theme_mod('header_type') == 'header_3') {
            get_template_part('includes/header/header_3', 'header_3');
        } else if (get_theme_mod('header_type') == 'header_4') {
            get_template_part('includes/header/header_4', 'header_4');
        } else if (get_theme_mod('header_type') == 'header_5') {
            get_template_part('includes/header/header_5', 'header_5');
        } else if (get_theme_mod('header_type') == 'header_6') {
            get_template_part('includes/header/header_6', 'header_6');
        }
    }
    ?>





