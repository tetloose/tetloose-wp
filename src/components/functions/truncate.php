<?php
/**
 * Truncate
 *
 * @package Tetloose-Theme
 **/

/**
 * Function to truncate long strings
 *
 * @param string $string value passed is a string.
 * @param number $num_char value passed is a number.
 * @param string $separator value passed is a string.
 **/
function truncate( $string, $num_char, $separator ) {
    $string = wp_strip_all_tags( html_entity_decode( $string ) );

    if ( strlen( $string ) <= $num_char ) {
        $final_string = $string;
    } else {
        $final_string = '';
        $words        = explode( ' ', $string );

        foreach ( $words as $value ) {
            if ( strlen( $final_string . ' ' . $value ) < $num_char ) {
                if ( ! empty( $final_string ) ) {
                    $final_string .= ' ';
                }
                $final_string .= $value;
            } else {
                break;
            }
        }
        $final_string .= $separator;
    }

    return $final_string;
}
