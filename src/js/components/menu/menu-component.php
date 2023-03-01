<?php
/**
 * Navigation
 *
 * @package Tetloose-Theme
 */

$header_menu = get_field( 'header_menu', 'option' );
$menu_style = get_field( 'menu_style', 'option' );

$trigger_styles = new ReplaceClassName(
    [
        'trigger',
        $menu_style['button_bg_color'],
        $menu_style['button_bg_hover_color'],
        $menu_style['bar_bg_hover_color'],
        $menu_style['bar_bg_active_color'],
    ]
);
$trigger_title_styles = new ReplaceClassName(
    [
        'trigger__title',
        $menu_style['bar_bg_color'],
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
if ( ! empty( $header_menu ) ) :
    $navigation = wp_nav_menu(
        array(
            'menu' => $header_menu['navigation']->ID,
            'container' => false,
            'items_wrap' => '
                <ul data-styles="' . esc_attr( $sub_nav_styles->names() ) . '">
                    %3$s
                </ul>
            ',
            'echo' => false,
        )
    );
    ?>
    <div
        data-module="Menu"
        data-animation="fade-in"
        <?php if ( ! empty( $header_menu['navigation_title_closed'] ) ) : ?>
            data-closed="<?php echo esc_attr( $header_menu['navigation_title_closed'] ); ?>"
        <?php endif; ?>
        <?php if ( ! empty( $header_menu['navigation_title_open'] ) ) : ?>
            data-open="<?php echo esc_attr( $header_menu['navigation_title_open'] ); ?>"
        <?php endif; ?>
        >
        <nav
            data-styles="<?php echo esc_attr( $nav_styles->names() ); ?>"
            aria-expanded="false">
            <?php echo wp_kses_post( $navigation ); ?>
        </nav>
        <button
            data-styles="<?php echo esc_attr( $trigger_styles->names() ); ?>"
            aria-expanded="false"
            aria-label="Open navigation">
            <span data-styles="<?php echo esc_attr( $trigger_title_styles->names() ); ?>">
                <?php if ( ! empty( $header_menu['navigation_title_closed'] ) ) : ?>
                    <?php echo esc_attr( $header_menu['navigation_title_closed'] ); ?>
                <?php endif; ?>
            </span>
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
