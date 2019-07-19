<?php
$header_type = get_theme_mod('header_type');
$action_bar_enable = get_theme_mod('action_bar_enable');
$action_bar_background = get_theme_mod('action_bar_background');

if ($action_bar_enable == 1 && (($header_type != 'header_5') && ($header_type != 'header_6'))) { ?>

    <div class="actionbar">
        <div class="container">
            <div class="row">
                <div class="col-6"><?php include(get_template_directory() . '/includes/contacts/contacts.php'); ?></div>
                <div class="col-6"><?php include(get_template_directory() . '/includes/social/social.php');
                    if( function_exists( 'icl_get_languages' )) {
                        include(get_template_directory() . '/includes/wpml/wpml.php');
                    }
                     ?></div>
            </div>
        </div>
    </div>

<?php }