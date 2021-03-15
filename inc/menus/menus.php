<?php
/**
 * The template for displaying Functions.
 * 
 * @package mexico
 */
?>
<?php

function mexico_register_menu() {
    register_nav_menus(
        array(
            'header' => __( 'Header Menu', 'mexico' ),
            'footer' => __( 'Footer Menu', 'mexico' ),
            'Mobile' => __( 'Mobile Menu', 'mexico' ),
            'Social' => __( 'social Menu', 'mexico' ),
        )
    );
}
add_action( 'init', 'mexico_register_menu' );
?>