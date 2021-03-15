<?php
/**
 * The template for displaying Functions.
 * 
 * @package mexico
 */
?>

<?php
define( 'MEXICO_THEME_DIR', get_template_directory() );
define( 'MEXICO_THEME_URI', get_template_directory_uri() );

if ( ! function_exists( 'mexico_setup' ) ): 
    function mexico_setup() {
        load_theme_textdomain( 'mexico', MEXICO_THEME_DIR . '/Languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );
        add_image_size( 'mexico-large', 500, 400, true ); // width, height, crop

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

                // Custom header, custom background, custom logo
                add_theme_support(
                    'custom-header',
                    apply_filters( 'mexico_custom_header_args',
                    array(
                        'default-color' => 'ffffff',   // Customize > Colors > Header Text Color
                        'default-image' => '',
                        'width'         => 400,
                        'height'        => 200,
                        'flex-height'   => true,
                        'flex-width'    => true,
                        )
                    )
                );
                add_theme_support(
                    'custom-background',
                    apply_filters(
                        'mexico_custom_background_args',
                        array(
                            'default-color' => 'ff0000',   // Customize > Colors > Background Color
                            'default-image' => '',
                        )
                    )
                );
                add_theme_support(
                    'custom-logo',
                    array(
                        'width'       => 50,
                        'height'      => 50,
                        'flex-width'  => true,
                        'flex-height' => true,
                        'header-text' => array( 'title-tag', 'site-description' ),
                    )
                );

                add_theme_support( 'customize-selective-refresh-widgets' );

    }
endif;
add_action( 'after_setup_theme', 'mexico_setup' );

// require MEXICO_THEME_DIR . './inc/enqueue/enqueue-styles.php';
// require MEXICO_THEME_DIR . './inc/enqueue/enqueue-scripts.php';