<div class="logo">
    <a id="logo" class="navbar-brand" href="<?= get_home_url() ?>" title="<?= get_bloginfo('name') ?>" alt="logo">

        <?php

        $logo_main = get_theme_mod('logo_main');
        $logo_mobile = get_theme_mod('logo_mobile');
        $logo_sticky = get_theme_mod('logo_sticky');

        if ($logo_mobile == '') {
            $logo_mobile = $logo_main;
        }

        if ($logo_sticky == '') {
            $logo_sticky = $logo_main;
        }

        ?>

        <?php if ($logo_main != '') { ?>
            <img class="logo-main" src="<?= $logo_main ?>" height="<?= get_theme_mod('logo_height', 100) ?>"
                 alt="logo">
            <img class="logo-mobile" src="<?= $logo_mobile ?>"
                 height="<?= get_theme_mod('logo_mobile_height', 70) ?>" alt="logo">
            <img class="logo-sticky" src="<?= $logo_sticky ?>"
                 height="<?= get_theme_mod('logo_sticky_height', 60) ?>" alt="logo">
        <?php } else {
            ?>

            <h3 class="title"><?= get_bloginfo('name') ?></h3>>

            <?php

        }


        ?>
    </a>
</div>
