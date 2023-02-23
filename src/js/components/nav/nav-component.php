<?php
/**
 * Navigation
 *
 * @package Tetloose-Theme
 */

$header_nav = get_field( 'header_nav', 'option' );
$header_nav_background_colour = get_field( 'headerNavBackgroundColour', 'option' ) ? get_field( 'headerNavBackgroundColour', 'option' ) : '';
$header_nav_font_colour = get_field( 'headerNavFontColour', 'option' ) ? get_field( 'headerNavFontColour', 'option' ) : '';

if ( ! empty( $header_nav ) ) :
    $header_menu = wp_nav_menu(
        array(
            'menu' => $header_nav->ID,
            'container' => false,
            'items_wrap' => '
            <nav
                class="' . $header_nav_background_colour . ' js-menu"
                data-styles="nav">
                <ul
                    class="' . $header_nav_font_colour . '"
                    data-styles="nav__item">
                    %3$s
                </ul>
            </nav>',
            'echo' => false,
        )
    );
    ?>
    <nav
        data-module="Nav"
        data-animation="fade-in">
        <?php echo wp_kses_post( $header_menu ); ?>
    </nav>
    <?php
endif;
?>
