<nav class="navbar navbar-expand-lg for-sticky">
    <div class="container">
        <?php get_template_part('includes/logo/logo', 'logo'); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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
    </div>
</nav>
