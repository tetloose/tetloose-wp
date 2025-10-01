<?php
/**
 * Typography
 * Generate HTML Typography tags
 *
 * @package Tetloose-Theme
 */

/**
 * Function return html text
 *
 * @param string $text Text.
 * @param string $tag HTML Tag h1-h6 p small.
 * @param string $styles SCSS Module class names.
 * @param string $class_names Global class names.
 * @return string Returns html text element.
 **/
function typography(
    $text = '',
    $tag = 'span',
    $styles = '',
    $class_names = ''
) {
    $_typography  = '<' . $tag . ' data-styles="' . $styles . '" class="' . $class_names . '">';
    $_typography .= $text;
    $_typography .= '</' . $tag . '>';

    return $_typography;
}
