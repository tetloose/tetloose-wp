<?php
/**
 * Partials - Content
 *
 * @package Tetloose-Theme
 */

$content_component = new Module(
    [
        $content_obj->styles,
    ],
    [
        'u-content',
        $content_obj->class_names,
    ]
);
if ( ! empty( $content_obj ) ) :
    ?>
    <div
        data-styles="<?php echo esc_attr( $content_component->styles() ); ?>"
        class="<?php echo esc_attr( $content_component->class_names() ); ?>">
        <?php echo wp_kses_post( $content_obj->content ); ?>
    </div>
    <?php
endif;
