<?php

// Load assets for wp-admin when editor is active
function fdctheme_gutenberg_gmaps_block_admin() {
    wp_enqueue_script(
        'fdctheme-gmaps-block-editor',
        get_template_directory_uri().'/blocks/gmaps/gmaps.js',
        array( 'wp-blocks', 'wp-element' )
    );

    wp_enqueue_style(
        'fdctheme-gmaps-block-editor',
        get_template_directory_uri().'/blocks/gmaps/gmaps.css',
        array()
    );
}

add_action( 'enqueue_block_editor_assets', 'fdctheme_gutenberg_gmaps_block_admin' );

// Load assets for frontend
function fdctheme_gutenberg_gmaps_block_frontend() {

    wp_enqueue_style(
        'fdctheme-gmaps-block-editor',
        get_template_directory_uri().'/blocks/gmaps/gmaps.css',
        array()
    );
}
add_action( 'wp_enqueue_scripts', 'fdctheme_gutenberg_gmaps_block_frontend' );
