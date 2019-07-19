<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php get_template_part('includes/logo/logo', 'logo');?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
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
        ?>
    </div>
</nav>