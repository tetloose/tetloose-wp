<?php
/**
 * Functions
 *
 * @package Tetloose-Theme
 */

$parts = [
    'get-files',
    'admin',
    'post-type',
    'pagination',
    'gutenberg',
    'contact-form-7',
    'bold-last-string',
    'slugify',
    'truncate',
    'titleizeit',
    'starts-with',
    'enqueue',
    'acf',
    'images',
    'menus',
    'the-title',
    'tinymce',
    'console-log',
    'class-module',
];

foreach ( $parts as $part ) {
    require_once get_theme_file_path( "components/{$part}.php" );
}
