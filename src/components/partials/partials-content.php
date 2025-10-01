<?php
/**
 * Partials - Content
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $component = new Module(
        [
            $args['styles'] ?? '',
        ],
        [
            'u-content',
            $args['class_names'] ?? '',
        ]
    );
    ?>
    <div
        data-styles="<?php echo esc_attr( $component->styles() ); ?>"
        class="<?php echo esc_attr( $component->class_names() ); ?>"
    >
        <?php echo wp_kses_post( $args['content'] ?? '' ); ?>
    </div>
    <?php
endif;
