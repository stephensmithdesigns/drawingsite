<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {


    $parent_style = 'richone-mainstyle';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}
?>
