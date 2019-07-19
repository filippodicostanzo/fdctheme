<?php
/**
 * The template for displaying footer part
 *
 * @package WordPress
 * @subpackage FDC Theme
 * @since 1.0
 * @version 1.0
 */

wp_footer(); ?>
<footer>
    <div class="container">
        AAAAAAAAAAAAAA
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer_menu',
            'menu_id' => 'footer_left_menu',
            'menu_class' => 'footer_menu',
            'before' => '<i class="fab fa-affiliatetheme"></i> ',
            'after' => ' <i class="fab fa-affiliatetheme"></i>',
            'fallback_cb' => 'footer_menu::fallback'
        ));
        ?>
    </div>
</footer>
</div>
</body>
</html>
