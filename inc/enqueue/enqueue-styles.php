<?php

function mexico_enqueue_styles() {

    // Register Theme Styles
    wp_register_style( 'theme-css', MEXICO_THEME_URI . '/dist/css/theme.css', array(), filemtime( get_template_directory() . '/dist/css/theme.css' ), 'all' );

    // Enqueue Theme Styles
    wp_enqueue_style( 'theme-css' );

}
add_action( 'wp_enqueue_scripts', 'mexico_enqueue_styles' );


?>