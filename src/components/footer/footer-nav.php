<?php
/**
 * Footer Navigation
 *
 * @package Tetloose-Theme
 */

$footer_navigation = get_field( 'footer_navigation', 'option' );

if ( ! empty( $footer_navigation ) && isset( $footer_navigation->ID ) ) :
    get_template_part(
        'components/navigation-component',
        null,
        array(
            'id'             => $footer_navigation->ID,
            'styles'         => 'nav',
            'class_names'    => '',
            'ul_styles'      => 'nav__ul',
            'ul_class_names' => '',
            'aria_expanded'  => '',
            'animation'      => '',
        )
    );
endif;
