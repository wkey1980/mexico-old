<?php
/**
 * Template for widgets
 * 
 * 
 * 
 * @package mexico
 */
?>
<?php

function mexico_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Header Widget', 'mexico' ),
            'id'            => 'headerWidget',
            'description'   => esc_html__( 'Add Widgets Here' ),
            'before_widget' => '<section id="%1%s" class="%2s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Widget', 'mexico' ),
            'id'            => 'footerWidget',
            'description'   => esc_html__( 'Add Widgets Here' ),
            'before_widget' => '<section id="%1%s" class="%2s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'mexico_widgets_init' );