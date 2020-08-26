<?php

/**
 * The template for displaying index page
 *
 * @package WordPress
 * @subpackage FDC Theme
 * @since 1.0
 * @version 1.0
 */

   //https://maddisondesigns.com/2017/05/the-wordpress-customizer-a-developers-guide-part-1

    get_header();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <?php while (have_posts()):
                    the_post(); ?>

                    <div class="card">
                        <div class="card-img-top">
                            <?= the_post_thumbnail(''); ?>
                        </div>
                        <div class="card-body">
                            <a href="<?= get_permalink() ?>"><h5 class="card-title"><?= the_title() ?></h5></a>
                            <h6><i class="fas fa-user" aria-hidden="true"></i> <?= the_author_posts_link() ?></h6>
                            <h6><i class="far fa-clock" aria-hidden="true"></i> <?= the_time('d/m/Y') ?></h6>
                            <p class="card-text"><?= the_tags('Tags: ', ' - '); ?></p>
                            <p class="card-text"><?= get_the_category_list(' - '); ?></p>
                            <p class="card-text"><?= the_excerpt() ?></p>
                            <a href="<?= get_permalink() ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                <?php endwhile ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <nav class="pagination">
                            <?= paginate_links() ?>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <?php echo get_theme_mod('facebook') ?>
                <?php echo get_theme_mod('main_google_font_list') ?>
            </div>

        </div>
    </div>
    <?php
    get_footer();
    ?>
</div>