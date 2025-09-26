<?php
/**
 * Wrapper - Header Scripts
 *
 * @package Tetloose-Theme
 */

$head_script = get_field( 'head_script', 'option' );

wp_head();

if ( ! empty( $head_script ) ) {
    echo esc_sql( $head_script );
}
