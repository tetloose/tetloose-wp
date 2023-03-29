<?php
/**
 * Partials - Content
 *
 * @package Tetloose-Theme
 */

$content_component = new Module(
    [
        $content->styles,
    ],
    [
        'u-content',
        $content->class_names,
    ]
);
if ( ! empty( $content ) ) :
    ?>
    <div
        data-styles="<?php echo esc_attr( $content_component->styles() ); ?>"
        class="<?php echo esc_attr( $content_component->class_names() ); ?>">
        <?php echo wp_kses_post( $content->content ); ?>
    </div>
    <?php
endif;
