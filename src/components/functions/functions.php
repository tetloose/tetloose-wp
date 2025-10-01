<?php
/**
 * Functions
 *
 * @package Tetloose-Theme
 */

$parts = [
    'acf',
    'admin',
    'class-module',
    'create-slug',
    'console-log',
    'contact-form-7',
    'comments',
    'enqueue',
    'get-files',
    'gutenberg',
    'images',
    'menus',
    'pagination',
    'permalink',
    'post-title',
    'post-type',
    'starts-with',
    'the-title',
    'tinymce',
    'title-case',
    'truncate',
    'typography',
];

foreach ( $parts as $part ) {
    $include = get_theme_file_path( "components/{$part}.php" );

    if ( file_exists( $include ) ) {
        require_once $include;
    }
}
