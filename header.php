<?php
/**
 * The template for displaying header part
 *
 * @package WordPress
 * @subpackage FDC Theme
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php bloginfo('name') ?> - <?php bloginfo('description') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">

    <?php
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

    ?>





