<?php

function mexico_enqueue_scripts() {

    // Register Theme Scripts
    wp_register_script( 'theme-js', MEXICO_THEME_URI . '/dist/js/theme.js', array('jquery'), filemtime( get_template_directory() . '/dist/js/theme.js' ), true  );

    // Enqueue Theme Scripts
    wp_enqueue_script( 'theme-js' );

}
add_action( 'wp_enqueue_scripts', 'mexico_enqueue_scripts' );
