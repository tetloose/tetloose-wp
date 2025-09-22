<?php
/**
 * Footer Navigation
 *
 * @package Tetloose-Theme
 */

$footer_navigation     = get_field( 'footer_navigation', 'option' );
$footer_content_styles = get_field( 'footer_content_styles', 'option' );

$navigation_component = new Module(
    [
        'footer__nav',
    ],
    [
        'u-load-hide',
    ]
);

$navigation_ul_component = new Module(
    [
        'sub-nav',
        'is-inline',
        $footer_content_styles['link_hover_color'],
        $footer_content_styles['link_background_hover_color'],
    ],
    []
);

if ( isset( $footer_navigation->ID ) ) :
    get_template_part(
        'components/navigation-component',
        null,
        array(
            'tag'            => 'div',
            'id'             => $footer_navigation->ID,
            'styles'         => $navigation_component->styles(),
            'class_names'    => $navigation_component->class_names(),
            'ul_styles'      => $navigation_ul_component->styles(),
            'ul_class_names' => $navigation_ul_component->class_names(),
            'aria_expanded'  => '',
        )
    );
endif;
