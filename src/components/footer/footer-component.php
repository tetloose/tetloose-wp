<?php
/**
 * Footer
 *
 * @package Tetloose-Theme
 */

$footer_component = new Module(
    [
        'footer',
    ],
    [
        'u-load-hide',
    ]
);
?>

<footer
    style="opacity: 0"
    data-module="Footer"
    data-animation="fade-in"
    data-duration="400"
    data-styles="<?php echo esc_attr( $footer_component->styles() ); ?>"
    class="<?php echo esc_attr( $footer_component->class_names() ); ?>">
    <?php
    get_template_part( '/components/footer', 'social' );
    get_template_part( '/components/footer', 'nav' );
    get_template_part( '/components/footer', 'content' );
    ?>
</footer>
