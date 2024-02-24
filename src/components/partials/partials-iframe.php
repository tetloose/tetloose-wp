<?php
/**
 * Partials - Iframe
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $iframe_component = new Module(
        [
            $args['styles'],
        ],
        [
            'js-iframe',
            'u-skeleton-media',
            'u-media',
            $args['class_names'],
        ]
    );
    ?>
    <div
        data-styles="<?php echo esc_attr( $iframe_component->styles() ); ?>"
        class="<?php echo esc_attr( $iframe_component->class_names() ); ?>"
        data-animation="<?php echo esc_attr( $args['animation'] ); ?>"
        data-duration="<?php echo esc_attr( $args['animation_duration'] ); ?>"
        data-src="<?php echo esc_attr( $args['src'] ); ?>"
        data-rest="<?php echo esc_attr( $args['rest'] ); ?>"></div>
    <?php
endif;
