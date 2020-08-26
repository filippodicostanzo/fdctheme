<?php
/**
 * Checks to see if we're on the front page or not.
 */
function fdctheme_is_frontpage() {
    return ( is_front_page() && ! is_home() );
}