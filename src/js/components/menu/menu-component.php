<?php
/**
 * Navigation
 *
 * @package Tetloose-Theme
 */

$menu_navigation = get_field( 'menu_navigation', 'option' );
$menu_style = get_field( 'menu_style', 'option' );

$button_styles = new ReplaceClassName(
    [
        'trigger',
        $menu_style['button_bg_color'],
        $menu_style['button_bg_hover_color'],
        $menu_style['bar_bg_hover_color'],
        $menu_style['bar_bg_active_color'],
    ]
);
$bar_styles = new ReplaceClassName(
    [
        'trigger__bar',
        $menu_style['bar_bg_color'],
    ]
);
$nav_styles = new ReplaceClassName(
    [
        'nav',
        $menu_style['menu_bg_color'],
        $menu_style['menu_angles_bg_color'],
    ]
);
$sub_nav_styles = new ReplaceClassName(
    [
        'sub-nav',
        $menu_style['menu_link_color'],
        $menu_style['menu_link_hover_color'],
    ]
);

$navigation = wp_nav_menu(
    array(
        'menu' => $menu_navigation->ID,
        'container' => false,
        'items_wrap' => '
            <ul
                data-styles="' . esc_attr( $sub_nav_styles->names() ) . '">
                %3$s
            </ul>
        ',
        'echo' => false,
    )
);
// trigger hover colour.
// trigger bar colour/.
// aria text.
if ( ! empty( $menu_navigation ) ) :
    ?>
    <div
        data-module="Menu"
        data-animation="fade-in">
        <nav data-styles="<?php echo esc_attr( $nav_styles->names() ); ?>">
            <?php echo wp_kses_post( $navigation ); ?>
        </nav>
        <button
            data-styles="<?php echo esc_attr( $button_styles->names() ); ?>"
            aria-label="Open navigation">
            <span data-styles="trigger__container">
                <span data-styles="<?php echo esc_attr( $bar_styles->names() ); ?>"></span>
                <span data-styles="<?php echo esc_attr( $bar_styles->names() ); ?>"></span>
                <span data-styles="<?php echo esc_attr( $bar_styles->names() ); ?>"></span>
                <span data-styles="<?php echo esc_attr( $bar_styles->names() ); ?>"></span>
            </span>
        </button>
    </div>
    <?php
endif;
?>
