<?php

if (function_exists('rev_slider_shortcode')) {
    if (get_post_meta(get_the_ID(), 'meta-box-select', true) != "-- Select --") {
        echo do_shortcode('[rev_slider alias="' . get_post_meta(get_the_ID(), 'meta-box-select', true) . '"][/rev_slider]');
    }
}

?>

<?php

$footer_hidden = get_theme_mod('footer_hidden');
$logo_footer = get_theme_mod('logo_footer');
$back_to_top_enable = get_theme_mod('back_to_top_enable');

if (function_exists('icl_get_languages')) {
    include(get_template_directory() . '/includes/wpml/wpml.php');
}


if (get_post_meta(get_the_ID(), 'title-page-enable', true)) {

?>

    <header class="entry-header" style="background-image:url('<?= the_post_thumbnail_url('full'); ?>')">
        <div class="header-overlay"></div>
        <div class="header-title">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <div class="read-down"><a href="#Content"><i class="fas fa-chevron-down"></i></a></div>
        </div>
    </header><!-- .entry-header -->
<?php
}



?>

<div class="collapse navbar-collapse" id="navbarNav">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'main_menu',
        'menu_id' => false,
        'container' => false,
        'depth' => 2,
        'menu_class' => 'navbar-nav',
        'after' => ' <i class="far fa-circle"></i>',
        'fallback_cb' => 'bs4navwalker::fallback',
        'walker' => new bs4Navwalker(),
    ));
    ?>
</div>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="section-group" id="Content">


        <div class="entry-content" id="<?php if (get_theme_mod('page_layout_type') == 'full_page') echo 'fullpage' ?>">

            <?php


            the_content();
            wp_link_pages(
                array(
                    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'fdctheme') . '</span>',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'pagelink' => '<span class="screen-reader-text">' . __('Page', 'fdctheme') . ' </span>%',
                    'separator' => '<span class="screen-reader-text">, </span>',
                )
            );
            ?>

            <footer class="footer section">
                <div class="container">
                    <?php if ($back_to_top_enable) {
                        echo ('<a href="#wrapper" id="back-to-top" class="back-to-top"><span><i class="fas fa-chevron-up"></i></span></a>');
                    } ?>
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

                    <hr>
                    <div class="footer-links">
                        <a href="http://www.alfonsopepeshop.it/" target="_blank"><img src="/wp-content/uploads/logo-shop.png" alt="Alfonso Pepe" /></a>
                        <a href="https://www.pasticceria-pepe.it/" target="_blank"><img src="/wp-content/uploads/logo-pasticceria.png" alt="Alfonso Pepe" /></a>

                    </div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu_id' => 'footer_menu',
                        'menu_class' => 'footer-menu',
                        //'before' => '<i class="fab fa-affiliatetheme"></i> ',
                        'after' => ' <i class="far fa-circle"></i>',
                        'fallback_cb' => 'footer_menu::fallback'
                    ));
                    ?>

                    <?php include(get_template_directory() . '/includes/social/social.php'); ?>

                    <div class="col-12 text-center copyright-details">
                        <p>Copyright &copy; <?php echo date("Y"); ?></p>
                        <p><?= (get_theme_mod('contacts_address')) ?></p>
                        <?php if (get_theme_mod('contacts_vat_id') != '') echo '<p>P IVA ' . get_theme_mod('contacts_vat_id') . '</p>'; ?>
                        <p>e-mail: <?= (get_theme_mod('contacts_email')) ?></p>
                        <p><a href="#privacy" class="venobox vbox-item" data-vbtype="inline"> Privacy Policy</a> - <a href="#cookie" class="venobox vbox-item" data-vbtype="inline">Cookie Policy</a></p>
                    </div>

                </div>


                <?php get_template_part('includes/copyright/copyright') ?>

        </div>
        <?php

        if (class_exists('Cookie_Notice')) {
            get_template_part('includes/cookiepolicy/cookiepolicy', 'cookiepolicy');
            get_template_part('includes/privacypolicy/privacypolicy', 'privacypolicy');
        }
        ?>
        </footer>
    </div><!-- .entry-content -->

    </div>


    <?php get_sidebar() ?>



</article><!-- #post-<?php the_ID(); ?> -->