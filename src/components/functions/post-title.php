<?php
/**
 * Post Title
 *
 * @package Tetloose-Theme
 */

/**
 * Function to return a title
 *
 * @param boolean $use_post_title True or false.
 * @param string  $post_title Post Title.
 * @param string  $get_the_title Page Title.
 * @param string  $get_post_type Post Title Title.
 * @return string Returns Correct Title.
 **/
function post_title(
    $use_post_title = false,
    $post_title = '',
    $get_the_title = '',
    $get_post_type = ''
) {
    if ( $use_post_title ) {
        if ( is_archive() ) {
            return title_case( $get_post_type );
        }

        if ( is_single() || is_page() ) {
            return $get_the_title;
        }
    }

    return $post_title;
}
