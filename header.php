<?php
/**
 * Template for displaying the header
 * 
 * Contains all content until close of #masthead div
 * 
 * @package mexico
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Skip to content -->
    <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to Content', 'mexico' ); ?>
    </a>

    <div id="page" class="site">

        <header id="masthead" class="site-header">

        </header><!-- /#masthead -->