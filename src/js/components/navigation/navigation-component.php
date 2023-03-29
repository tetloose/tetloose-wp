<?php
/**
 * Navigation
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $navigation ) ) :
    $navigation_menu = wp_nav_menu(
        array(
            'menu' => $navigation->id,
            'container' => false,
            'items_wrap' => '
                <ul
                    data-module="Navigation"
                    data-animation="fade-in"
                    class="' . esc_attr( $navigation->class_names ) . '"
                    data-styles="' . esc_attr( $navigation->styles ) . '">
                    %3$s
                </ul>
            ',
            'echo' => false,
        )
    );
    echo wp_kses_post( $navigation_menu );
endif;
