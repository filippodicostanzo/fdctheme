<ul class="social">
<?php

$target = 'target="_blank"';
if( get_theme_mod('facebook')!= '' ) echo '<li class="facebook"><a '.$target.' href="'. get_theme_mod('facebook') .'" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>';
if( get_theme_mod('instagram')!= '' ) echo '<li class="instagram"><a '.$target.' href="'. get_theme_mod('instagram') .'" title="Instagram"><i class="fab fa-instagram"></i></a></li>';
if( get_theme_mod('youtube')!= '' ) echo '<li class="youtube"><a '.$target.' href="'. get_theme_mod('youtube') .'" title="Youtube"><i class="fab fa-youtube"></i></a></li>';
if( get_theme_mod('twitter')!= '' ) echo '<li class="twitter"><a '.$target.' href="'. get_theme_mod('twitter') .'" title="Twitter"><i class="fab fa-twitter"></i></a></li>';
if( get_theme_mod('linkedin')!= '' ) echo '<li class="linkedin"><a '.$target.' href="'. get_theme_mod('linkedin') .'" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>';
if( get_theme_mod('tripadvisor')!= '' ) echo '<li class="tripadvisor"><a '.$target.' href="'. get_theme_mod('tripadvisor') .'" title="Tripadvisor"><i class="fab fa-tripadvisor"></i></a></li>';
if( get_theme_mod('whatsapp')!= '' ) echo '<li class="whatsapp"><a '.$target.' href="https://api.whatsapp.com/send?phone=39'. get_theme_mod('whatsapp') .'" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>';

?>
</ul>


