<ul class="contacts">
    <?php
    if( get_theme_mod('contacts_address')!= '' && get_theme_mod('address_enable_desktop', 1)==1 ) echo '<li class="contacts_address"><p><i class="fas fa-map-marker-alt"></i> '.get_theme_mod('contacts_address').'</p></li>';
    if( get_theme_mod('contacts_email')!= '' && get_theme_mod('email_enable_desktop', 1)==1  ) echo '<li class="contacts_address"><a href="mailto:'. get_theme_mod('contacts_email') .'"><i class="fas fa-envelope"></i> '.get_theme_mod('contacts_email').'</a></li>';
    if( get_theme_mod('contacts_phone_1')!= '' && get_theme_mod('phone_1_enable_desktop', 1)==1) echo '<li class="contacts_phone"><a '.$target.' href="tel://'. get_theme_mod('contacts_phone_1') .'" title="Instagram"><i class="fas fa-phone"></i> '.get_theme_mod('contacts_phone_1').'</a></li>';
    if( get_theme_mod('contacts_phone_2')!= '' && get_theme_mod('phone_2_enable_desktop', 1)==1) echo '<li class="contacts_phone"><a '.$target.' href="tel://'. get_theme_mod('contacts_phone_2') .'" title="Instagram"><i class="fas fa-phone"></i> '.get_theme_mod('contacts_phone_2').'</a></li>';
    ?>
</ul>

<ul class="contacts-mobile">
    <?php
    if( get_theme_mod('contacts_address')!= '' && get_theme_mod('address_enable_mobile', 1)==1 ) echo '<li class="contacts_address"><p><i class="fas fa-map-marker-alt"></i> '.get_theme_mod('contacts_address').'</p></li>';
    if( get_theme_mod('contacts_email')!= '' && get_theme_mod('email_enable_mobile', 1)==1  ) echo '<li class="contacts_address"><a href="mailto:'. get_theme_mod('contacts_email') .'"><i class="fas fa-envelope"></i> '.get_theme_mod('contacts_email').'</a></li>';
    if( get_theme_mod('contacts_phone_1')!= '' && get_theme_mod('phone_1_enable_mobile', 1)==1) echo '<li class="contacts_phone"><a '.$target.' href="tel://'. get_theme_mod('contacts_phone_1') .'" title="Instagram"><i class="fas fa-phone"></i> '.get_theme_mod('contacts_phone_1').'</a></li>';
    if( get_theme_mod('contacts_phone_2')!= '' && get_theme_mod('phone_2_enable_mobile', 1)==1) echo '<li class="contacts_phone"><a '.$target.' href="tel://'. get_theme_mod('contacts_phone_2') .'" title="Instagram"><i class="fas fa-phone"></i> '.get_theme_mod('contacts_phone_2').'</a></li>';
    ?>
</ul>


