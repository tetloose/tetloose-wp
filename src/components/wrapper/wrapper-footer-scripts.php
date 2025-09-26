<?php
/**
 * Wrapper - Footer Scripts
 *
 * @package Tetloose-Theme
 */

$footer_script = get_field( 'footer_script', 'option' );

wp_footer();

if ( ! empty( $footer_script ) ) {
    echo esc_sql( $footer_script );
}
