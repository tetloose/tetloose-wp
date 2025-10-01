<?php
/**
 * Permalink
 *
 * @package Tetloose-Theme
 */

/**
 * Function return a link.
 *
 * @param string $href value passed is a string.
 * @param string $styles value passed is a string.
 * @param string $class_names value passed is a string.
 * @param string $text value passed is a string.
 * @param string $target value passed is a string.
 * @param string $icon value passed is a string.
 * @return string returns <a href="$href" data-styles="$styles" class="$class_names">$text</a>
 **/
function permalink(
    $href = '',
    $styles = '',
    $class_names = '',
    $text = '',
    $target = '',
    $icon = ''
) {
    $permalink  = '<a href="' . $href . '" target="' . $target . '" data-styles="' . $styles . '" class="' . $class_names . '">';
    $permalink .= $text;
    $permalink .= $icon
        ? '<i class="u-icon-' . $icon . '"></i>'
        : null;
    $permalink .= '</a>';

    return $permalink;
}
