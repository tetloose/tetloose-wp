<?php
/**
 * Wrapper - Body Scripts
 *
 * @package Tetloose-Theme
 */

$scripts = get_field( 'scripts', 'option' );

if ( ! empty( $scripts ) ) {
    echo esc_sql( $scripts['body'] );
}