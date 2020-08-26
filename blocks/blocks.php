<?php

function fdctheme_gutenberg_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'fdctheme-block',
                'title' => __( 'FDC Theme Block', 'fdctheme-block' ),
            )
        )
    );
}
add_filter( 'block_categories', 'fdctheme_gutenberg_block_category', 10, 2);

require_once ('notice/notice.php');
require_once ('gmaps/gmaps.php');
require_once ('title/title.php');


//http://jschof.com/gutenberg-blocks/wordpress-gutenberg-blocks-example-creating-a-hero-image-block-with-inspector-controls-color-palette-and-media-upload-part-1/