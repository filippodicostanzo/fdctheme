<?php

// Load assets for wp-admin when editor is active
function fdctheme_gutenberg_title_block_admin() {
    wp_enqueue_script(
        'fdctheme-title-block-editor',
        get_template_directory_uri().'/blocks/title/title.js',
        array( 'wp-blocks', 'wp-element' )
    );

    wp_enqueue_style(
        'fdctheme-title-block-editor',
        get_template_directory_uri().'/blocks/title/title.css',
        array()
    );
}

add_action( 'enqueue_block_editor_assets', 'fdctheme_gutenberg_title_block_admin' );

// Load assets for frontend
function fdctheme_gutenberg_title_block_frontend() {

    wp_enqueue_style(
        'fdctheme-title-block-editor',
        get_template_directory_uri().'/blocks/title/title.css',
        array()
    );
}
add_action( 'wp_enqueue_scripts', 'fdctheme_gutenberg_title_block_frontend' );
