<?php
/**
 * Header
 *
 * @package Tetloose-Theme
 */

$open             = get_field( 'header_button_title_open', 'option' );
$closed           = get_field( 'header_button_title_closed', 'option' );
$header_component = new Module(
    [
        'header',
    ],
    [
        'u-load-hide',
    ]
);
?>

<header
    style="opacity: 0"
    data-module="Header"
    data-preload="true"
    data-animation="fade-in"
    data-duration="400"
    data-styles="<?php echo esc_attr( $header_component->styles() ); ?>"
    class="<?php echo esc_attr( $header_component->class_names() ); ?>"
    data-closed="<?php echo ! empty( $closed ) ? esc_attr( $closed ) : ''; ?>"
    data-open="<?php echo ! empty( $open ) ? esc_attr( $open ) : ''; ?>"
>
    <div data-styles="header__inside">
        <?php get_template_part( '/components/header', 'menu' ); ?>
    </div>
    <?php get_template_part( '/components/header', 'nav' ); ?>
</header>
