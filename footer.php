<?php

/**
 * The template for displaying footer part
 *
 * @package WordPress
 * @subpackage FDC Theme
 * @since 1.0
 * @version 1.0
 */
?>
<?php

$footer_hidden = get_theme_mod('footer_hidden');
$logo_footer = get_theme_mod('logo_footer');
$back_to_top_enable = get_theme_mod('back_to_top_enable');
$back_to_top_style = get_theme_mod('back_to_top_style');
$page_layout = get_theme_mod('page_layout_type');


//echo do_shortcode('[fdc_instagram_feeds_user]');

if (!$footer_hidden && $page_layout != 'full_page') {

?>

    <footer class="footer">
        <div class="container">
            <?php if ($back_to_top_enable) {
                if ($back_to_top_style == 'fixed') {
                    echo ('<a href="#wrapper" id="back-to-top" class="back-to-top back-to-top-fixed"><span><i class="fas fa-chevron-up"></i></span></a>');
                } else {
                    echo ('<a href="#wrapper" id="back-to-top" class="back-to-top"><span><i class="fas fa-chevron-up"></i></span></a>');
                }
            } ?>


            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="footer-logo">

                        <a href="<?= get_home_url() ?>" title="<?= get_bloginfo('name') ?>" alt="logo">
                            <?php if ($logo_footer != '') { ?>
                                <img class="logo-footer" src="<?= $logo_footer ?>" height="<?= get_theme_mod('logo_footer_height', 100) ?>" alt="logo">
                            <?php } else {
                                echo get_bloginfo('name');
                            }

                            ?>
                        </a>
                        <h6 class="footer-caption"> <?= get_bloginfo('description') ?></h6>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <h6>Company</h6>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu_id' => 'footer_menu',
                        'menu_class' => 'footer-menu',
                        //'before' => '<i class="fab fa-affiliatetheme"></i> ',
                       // 'after' => ' <i class="far fa-circle"></i>',
                        'fallback_cb' => 'footer_menu::fallback'
                    ));
                    ?>

                </div>
                <div class="col-md-6 col-xl-3">
                    <h6>Contacts</h6>

                    <ul class="contacts">
                        <?php
                        echo '<li class="contacts_address"><p><i class="fas fa-map-marker-alt"></i> '.get_theme_mod('contacts_address').'</p></li>';
                        echo '<li class="contacts_address"><a href="mailto:'. get_theme_mod('contacts_email') .'"><i class="fas fa-envelope"></i> Email</a></li>';
                        echo '<li class="contacts_phone"><a href="tel://'. get_theme_mod('contacts_phone_1') .'"><i class="fas fa-phone"></i> '.get_theme_mod('contacts_phone_1').'</a></li>';
                        echo '<li class="contacts_vat"><p><i class="fas fa-info-circle"></i> VATID '.get_theme_mod('contacts_vat_id').'</p></li>';
                        ?>
                    </ul>
                </div>
                <div class="col-md-6 col-xl-3">
                    <h6>Social</h6>
                    <?php get_template_part('includes/social/social-footer', 'social-footer') ?>
                </div>

            </div>

            <hr>



            <div class="col-12 text-center copyright-details">
                <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.it" target="_blank"><img alt="Licenza Creative Commons" src="https://licensebuttons.net/l/by-nc-nd/3.0/80x15.png" title="Ad eccezione di dove previsto diversamente in maniera esplicita, il contenuto di questo sito è rilasciato con licenza Creative Commons Attribuzione - Non commerciale - Non opere derivate 3.0 Unported License"></a>
                <span> // Copyright &copy; <?php echo date("Y"); ?></span>

                    <!-- <p><a href="#privacy" class="venobox vbox-item" data-vbtype="inline"> Privacy Policy</a> - <a href="#cookie" class="venobox vbox-item" data-vbtype="inline">Cookie Policy</a></p> -->
            </div>

        </div>
        <hr>

        <?php get_template_part('includes/copyright/copyright') ?>


        </div>
        <?php

        if (class_exists('Cookie_Notice')) {
            get_template_part('includes/cookiepolicy/cookiepolicy', 'cookiepolicy');
            get_template_part('includes/privacypolicy/privacypolicy', 'privacypolicy');
        }
        ?>
    </footer>


<?php
    get_template_part('includes/sideslide/sideslide', 'sideslide');
}
wp_footer(); ?>

<div class="bg-color" style="background-color: white;"></div>

</div>
</body>

</html>
