<?php
/**
 * Navigation
 *
 * @package Tetloose-Theme
 */

$header_nav = get_field( 'header_nav', 'option' );

$class_names = new ClassNames(
    [
        get_field( 'headerNavTriggerColour', 'option' )
            ? get_field( 'headerNavTriggerColour', 'option' )
            : '',
        get_field( 'headerNavTriggerColourActive', 'option' )
            ? get_field( 'headerNavTriggerColourActive', 'option' )
            : '',
    ]
);

if ( ! empty( $header_nav ) ) :
    ?>
    <div
        data-module="Menu"
        data-animation="fade-in">
        <button data-styles="menu__trigger" class="js-trigger" aria-label="Open navigation">
            <span data-styles="menu__trigger-container">
                <span
                    data-styles="menu__trigger-bar"
                    class="<?php echo esc_attr( $class_names->container() ); ?>"></span>
                <span
                    data-styles="menu__trigger-bar"
                    class="<?php echo esc_attr( $class_names->container() ); ?>"></span>
                <span
                    data-styles="menu__trigger-bar"
                    class="<?php echo esc_attr( $class_names->container() ); ?>"></span>
                <span
                    data-styles="menu__trigger-bar"
                    class="<?php echo esc_attr( $class_names->container() ); ?>"></span>
            </span>
        </button>
    </div>
    <?php
endif;
?>
