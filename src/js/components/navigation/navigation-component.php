<?php
/**
 * Navigation
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $navigation_obj ) ) :
    $navigation = wp_nav_menu(
        array(
            'menu' => $navigation_obj->id,
            'container' => false,
            'items_wrap' => '
                <ul
                    data-module="Navigation"
                    data-animation="fade-in"
                    class="' . esc_attr( $navigation_obj->class_names ) . '"
                    data-styles="' . esc_attr( $navigation_obj->styles ) . '">
                    %3$s
                </ul>
            ',
            'echo' => false,
        )
    );
    echo wp_kses_post( $navigation );
endif;
