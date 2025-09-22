<?php
/**
 * Navigation
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) && isset( $args['tag'] ) && isset( $args['id'] ) ) :
    $navigation_component    = new Module(
        [
            $args['styles'],
        ],
        [
            $args['class_names'],
        ]
    );
    $navigation_ul_component = new Module(
        [
            $args['ul_styles'],
        ],
        [
            $args['ul_class_names'],
        ]
    );
    $animation               = isset( $args['animation'] ) ? $args['animation'] : 'fade-in';
    $navigation              = wp_nav_menu(
        array(
            'menu'       => $args['id'],
            'container'  => false,
            'items_wrap' => '
                <ul
                    data-styles="' . esc_attr( $navigation_ul_component->styles() ) . '"
                    class="' . esc_attr( $navigation_ul_component->class_names() ) . '">
                    %3$s
                </ul>
            ',
            'echo'       => false,
        )
    );
    ?>
    <<?php echo esc_attr( $args['tag'] ); ?>
        style="opacity: 0"
        data-module="Navigation"
        data-animation="<?php echo esc_attr( $animation ); ?>"
        data-duration="400"
        <?php if ( ! empty( $args['aria_expanded'] ) ) : ?>
            aria-expanded="<?php echo esc_attr( $args['aria_expanded'] ); ?>"
        <?php endif; ?>
        data-styles="<?php echo esc_attr( $navigation_component->styles() ); ?>"
        class="<?php echo esc_attr( $navigation_component->class_names() ); ?>">
        <?php echo wp_kses_post( $navigation ); ?>
    </<?php echo esc_attr( $args['tag'] ); ?>>
    <?php
endif;
