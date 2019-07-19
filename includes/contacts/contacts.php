<ul class="contacts">
    <?php
    if( get_theme_mod('contacts_address')!= '' ) echo '<li class="contacts_address"><p><i class="fas fa-map-marker-alt"></i> '.get_theme_mod('contacts_address').'</p></li>';
    if( get_theme_mod('contacts_phone')!= '' ) echo '<li class="contacts_phone"><a '.$target.' href="tel://'. get_theme_mod('contacts_phone') .'" title="Instagram"><i class="fas fa-phone"></i> '.get_theme_mod('contacts_phone').'</a></li>';
    ?>
</ul>


