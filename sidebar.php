<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage FDC Theme
 * @since 1.0
 * @version 1.0
 */


if (is_active_sidebar('sidebar-1') && get_theme_mod('page_layout_type') == 'sidebar_left') {
    ?>
    <aside id="secondary" class="widget-area sidebar_left" role="complementary"
           aria-label="<?php esc_attr_e('Blog Sidebar', 'twentyseventeen'); ?>">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </aside><!-- #secondary -->
    <?php
}
if (is_active_sidebar('sidebar-2') && get_theme_mod('page_layout_type') == 'sidebar_right') {
    ?>
    <aside id="secondary" class="widget-area sidebar_right" role="complementary"
           aria-label="<?php esc_attr_e('Blog Sidebar', 'twentyseventeen'); ?>">
        <?php dynamic_sidebar('sidebar-2'); ?>
    </aside><!-- #secondary -->
    <?php
}

if (is_active_sidebar('sidebar-1') && is_active_sidebar('sidebar-2') && get_theme_mod('page_layout_type') == 'sidebar_both') {
    ?>
    <aside id="secondary" class="widget-area sidebar_left" role="complementary"
           aria-label="<?php esc_attr_e('Blog Sidebar', 'twentyseventeen'); ?>">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </aside><!-- #secondary -->
    <aside id="secondary" class="widget-area sidebar_right" role="complementary"
           aria-label="<?php esc_attr_e('Blog Sidebar', 'twentyseventeen'); ?>">
        <?php dynamic_sidebar('sidebar-2'); ?>
    </aside><!-- #secondary -->
    <?php
}
?>


