<?php
/**
 * Post Nav Back
 *
 * @package Tetloose-Theme
 **/

get_template_part(
    'components/partials-navlink',
    null,
    array(
        'styles'      => 'post-nav__nav-link',
        'class_names' => 'u-icon-' . get_post_type(),
        'href'        => '/' . get_post_type(),
        'title'       => get_post_type() ?? '',
    )
);
