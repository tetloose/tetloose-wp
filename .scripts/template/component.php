<?php
/**
 * NICE_NAME
 * COMPONENT_DESCRIPTION
 *
 * @package Tetloose-Theme
 **/

$component = new Module(
    [
        'COMPONENT_NAME',
    ],
    [
        'u-load-hide',
    ]
);
?>
<section
    style="opacity: 0"
    data-module="EXPORT_NAME"
    data-animation="fade-in"
    data-duration="400"
    data-styles="<?php echo esc_attr( $component->styles() ); ?>"
    class="<?php echo esc_attr( $component->class_names() ); ?>">
    happy editing!
</section>
