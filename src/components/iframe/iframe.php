<?php
/**
 *  Figure Component
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $iframe_component = new Module(
        [
            $args['styles'] ?? '',
        ],
        [
            'u-media',
            $args['class_names'] ?? '',
        ]
    );
    ?>
    <div
        data-module="Iframe"
        data-duration="<?php echo esc_attr( $args['animation_duration'] ?? '' ); ?>"
        data-element="<?php echo esc_attr( $args['element'] ?? '' ); ?>"
        data-styles="<?php echo esc_attr( $iframe_component->styles() ); ?>"
        class="<?php echo esc_attr( $iframe_component->class_names() ); ?>">
    </div>
    <?php
endif;
