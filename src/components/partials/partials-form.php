<?php
/**
 * Partials - Form
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $component = new Module(
        [
            $args['styles'] ?? '',
        ],
        [
            'u-form',
            $args['class_names'] ?? '',
        ]
    );
    ?>
    <div
        data-styles="<?php echo esc_attr( $component->styles() ); ?>"
        class="<?php echo esc_attr( $component->class_names() ); ?>"
    >
        <?php echo do_shortcode( $args['form'] ?? '' ); ?>
    </div>
    <?php
endif;
