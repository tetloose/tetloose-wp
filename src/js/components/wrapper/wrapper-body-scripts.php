<?php
/**
 * Wrapper - Body Scripts
 *
 * @package Tetloose-Theme
 */

$body_script = get_field( 'body_script', 'option' );

if ( ! empty( $body_script ) ) {
    echo esc_sql( $body_script );
}
