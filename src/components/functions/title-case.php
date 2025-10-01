<?php
/**
 * Title Case
 *
 * @package Tetloose-Theme
 **/

/**
 * Function to convert string to title case
 *
 * @param string $_string value passed is a string.
 **/
function title_case( $_string ) {
    $_string = wp_strip_all_tags( (string) $_string );
    $_string = trim( $_string );
    $_string = preg_replace( '/\s+/', ' ', $_string );

    return ucwords( strtolower( $_string ) );
}
