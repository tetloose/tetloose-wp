<?php
/**
 *  Images
 *
 * @package Tetloose-Theme
 **/

/**
 *  Add SVG Mine support for uploads.
 **/
add_filter(
    'upload_mimes',
    function ( $mimes ) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    },
    20
);

/**
 *  Add Image sizes.
 */
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1080, 1080, true );
    add_image_size( 'xxlrg', 1520, 9999 );
    add_image_size( 'xlrg', 1280, 9999 );
    add_image_size( 'lrg', 1024, 9999 );
    add_image_size( 'med', 768, 9999 );
    add_image_size( 'sml', 320, 9999 );
}
