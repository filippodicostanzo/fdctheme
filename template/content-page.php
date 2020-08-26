<?php

if (function_exists('rev_slider_shortcode')) {
    if (get_post_meta(get_the_ID(), 'meta-box-select', true) != "-- Select --") {
        echo do_shortcode('[rev_slider alias="' . get_post_meta(get_the_ID(), 'meta-box-select', true) . '"][/rev_slider]');
    }
}

?>


<?php

if (get_post_meta(get_the_ID(), 'title-page-enable', true)) {

?>

    <header class="entry-header" style="background-image:url('<?= the_post_thumbnail_url('full'); ?>')">
        <div class="header-overlay"></div>
        <div class="header-title">
            <?php the_title('<h1 class="entry-title after-title-center container">', '</h1>'); ?>
            <?php the_breadcrumb(); ?>
            <div class="read-down"><a href="#Content"><i class="fas fa-chevron-down"></i></a></div>
        </div>
    </header><!-- .entry-header -->
<?php
}

?>


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
        </div><!-- .entry-content -->

        <?php
        edit_post_link(
            sprintf(
                /* translators: %s: Name of current post */
                __('Edit<span class="screen-reader-text"> "%s"</span>', 'fdctheme'),
                get_the_title()
            ),
            '<footer class="entry-footer"><span class="edit-link">',
            '</span></footer><!-- .entry-footer -->'
        );
        ?>

    </div>

    <?php get_sidebar() ?>

</article><!-- #post-<?php the_ID(); ?> -->
