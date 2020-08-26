<nav class="navbar navbar-expand-lg for-sticky">
    <div class="container">
        <div class="navbar-collapse collapse nav-content order-2 order-md-1">
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
        <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2">
            <?php get_template_part('includes/logo/logo', 'logo'); ?>
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
        </ul>
        <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'secondary_menu',
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

