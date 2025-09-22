<?php
/**
 * Footer Content
 *
 * @package Tetloose-Theme
 */

$footer_description = get_field( 'footer_description', 'option' ) ? get_field( 'footer_description', 'option' ) : '';

get_template_part(
    'components/partials-content',
    null,
    array(
        'styles'      => 'footer__content',
        'class_names' => '',
        'content'     => '<p><small>' . wp_kses_post( '<sup>&copy;</sup>' . esc_attr( gmdate( 'Y' ) ) . ' ' . get_bloginfo() . ' ' . $footer_description ) . '</small></p>',
    )
);
