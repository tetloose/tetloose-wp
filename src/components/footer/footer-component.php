<?php
/**
 * Footer
 *
 * @package Tetloose-Theme
 */

$footer = new Module(
    [
        'footer',
    ],
    [
        'u-load-hide',
    ],
    [
        'opacity: 0;',
    ]
);
?>

<footer
    styles="<?php echo esc_attr( $footer->inline_styles() ); ?>"
    data-module="Footer"
    data-animation="fade-in"
    data-duration="400"
    data-styles="<?php echo esc_attr( $footer->styles() ); ?>"
    class="<?php echo esc_attr( $footer->class_names() ); ?>"
>
    <?php
    get_template_part( '/components/footer', 'social' );
    get_template_part( '/components/footer', 'nav' );
    get_template_part( '/components/footer', 'content' );
    ?>
</footer>
