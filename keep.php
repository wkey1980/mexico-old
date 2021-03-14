<?php
/**
 * Keep php code as temporary storage
 */
?>

<?php
if ((get_theme_mod( 'header_text' ) !== 0 ) && (get_bloginfo( 'name' ) !== '' ) ) {
    echo '<div class="site-title">' . get_bloginfo( 'name' ) . '</div>';
} ?>
