<?php

if (get_post_meta(get_the_ID(), 'meta-box-select', true) != "-- Select --") {
    echo do_shortcode('[rev_slider alias="' . get_post_meta(get_the_ID(), 'meta-box-select', true) . '"][/rev_slider]');
}

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="container">

    <div class="section-group">

        <?php

        if (get_post_meta(get_the_ID(), 'meta-box-checkbox', true)) {
            ?>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header><!-- .entry-header -->
            <?php
        }

        ?>

        <div class="entry-content">
            <?php

            echo get_post_meta(get_the_ID(), 'meta-box-text', true);
            echo get_post_meta(get_the_ID(), 'meta-box-checkbox', true);
            echo get_post_meta(get_the_ID(), 'meta-box-select', true);
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
