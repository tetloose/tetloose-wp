<?php
/**
 * Header Menu
 *
 * @package Tetloose-Theme
 */

$header_navigation = get_field( 'header_navigation', 'option' );
$closed            = get_field( 'header_button_title_closed', 'option' );

if ( ! empty( $header_navigation ) && isset( $header_navigation->ID ) ) :
    ?>
    <button
        aria-expanded="false"
        aria-label="<?php echo ! empty( $closed ) ? esc_attr( $closed ) : ''; ?>"
        data-styles="menu"
    >
        <span data-styles="menu__bar"></span>
        <span data-styles="menu__bar"></span>
        <span data-styles="menu__bar"></span>
        <span data-styles="menu__bar"></span>
    </button>
    <?php
endif;
