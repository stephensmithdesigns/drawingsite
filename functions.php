<?php

function my_theme_enqueue_styles() {

    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}
?>
