<?php
/**
 * Header Nav
 *
 * @package Tetloose-Theme
 */

$header_navigation = get_field( 'header_navigation', 'option' );

if ( ! empty( $header_navigation ) && isset( $header_navigation->ID ) ) :
    get_template_part(
        'components/navigation-component',
        null,
        array(
            'id'             => $header_navigation->ID,
            'styles'         => 'nav',
            'class_names'    => '',
            'ul_styles'      => 'nav__ul',
            'ul_class_names' => '',
            'aria_expanded'  => 'false',
            'animation'      => '',
        )
    );
endif;
