<?php
/**
 * Console Log
 *
 * @package Tetloose-Theme
 **/

/**
 * Function to log php errors to console
 *
 * @param string $log value passed is a string.
 **/
function console_log( $log ) {
    $output = $log;

    if ( is_array( $output ) ) {
        $output = implode( ',', $output );
    }

    echo "<script>console.log('Debug Objects: " . esc_attr( $output ) . "' );</script>";
}
