<?php

/**
 * The template for displaying all single pages
 *
 * @package WordPress
 * @subpackage FDC Theme
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>
<?php
// Start the loop.
while (have_posts()) :
    the_post();

    if (get_theme_mod('page_layout_type') == 'full_page') {
        get_template_part('template/content', 'fullpage');
    } else {

        // Include the page content template.
        get_template_part('template/content', 'page');
    }

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }


// End of the loop.
endwhile;
?>

<?php get_footer();

?>