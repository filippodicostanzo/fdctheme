<div id="side-slide" class="right dark enabled" data-width="250" style="right: -250px;">
    <div class="close-wrapper"><a href="#" class="close"><i class="fas fa-times"></i></a></div>
    <div class="lang-wrapper">
        <?php
        if (function_exists('icl_get_languages')) {
            include(get_template_directory() . '/includes/wpml/wpml.php');
        }
        ?>
    </div>
    <div class="menu_wrapper">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_id' => false,
            'container' => false,
            'depth' => 2,
            'menu_class' => 'navbar-nav',
            'fallback_cb' => 'bs4navwalker::fallback',
            'walker' => new bs4Navwalker(),
        ));

        if (get_theme_mod('header_type') == 'header_2' || get_theme_mod('header_type') == 'header_4') {
            wp_nav_menu(array(
                'theme_location' => 'secondary_menu',
                'menu_id' => false,
                'container' => false,
                'depth' => 2,
                'menu_class' => 'navbar-nav',
                'fallback_cb' => 'bs4navwalker::fallback',
                'walker' => new bs4Navwalker(),
            ));
        }
        ?>


    </div>
    <?php get_template_part('includes/social/social', 'social') ?>
</div>
<div id="body-overlay"></div>
