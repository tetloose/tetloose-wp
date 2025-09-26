<?php
/**
 * Console Log
 *
 * @package Tetloose-Theme
 **/

/**
 * Function to log php errors to console
 *
 * @param mixed  $data value passed is a mixed type.
 * @param string $label value passed is a string.
 **/
function console_log( $data, $label = 'PHP' ) {
    if ( defined( 'WP_DEBUG' ) && ! WP_DEBUG ) {
        return;
    }

    $opts = JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES;

    $label_json = wp_json_encode( (string) $label, $opts );
    $data_json  = wp_json_encode( $data, $opts );

    echo '<script>console.log(' . wp_kses_post( $label_json ) . ', ' . wp_kses_post( $data_json ) . ');</script>';
}
