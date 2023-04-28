<?php
/**
 * Wrapper - Footer Scripts
 *
 * @package Tetloose-Theme
 */

$scripts = get_field( 'scripts', 'option' );
wp_footer();
if ( ! empty( $scripts ) ) {
    echo esc_sql( $scripts['footer'] );
}
