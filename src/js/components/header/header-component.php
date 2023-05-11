<?php
/**
 * Header
 *
 * @package Tetloose-Theme
 */

$header_logo = get_field( 'header_logo', 'option' );
$header_cta = get_field( 'header_cta', 'option' );
$header_styles = get_field( 'header_styles', 'option' );
$header_navigation = get_field( 'header_navigation', 'option' );
$navigation_styles = get_field( 'navigation_styles', 'option' );
$header_component = new Module(
    [
        'header',
    ],
    [
        'u-animate-hide',
        $header_styles['bg_borders']['background_color'],
        $header_styles['bg_borders']['border_color']
            ? 'u-border-b ' . $header_styles['bg_borders']['border_color']
            : '',
        $header_styles['btn_styles']['color'],
        $header_styles['btn_styles']['border_color'],
        $header_styles['btn_styles']['background_color'],
        $header_styles['btn_styles']['hover_color'],
        $header_styles['btn_styles']['border_hover_color'],
        $header_styles['btn_styles']['background_hover_color'],
        $header_styles['active_btn']['active_color'],
        $header_styles['active_btn']['active_hover_color'],
        $header_styles['selection']['color'],
        $header_styles['selection']['background_color'],
    ]
);
$cta_link_component = new Module(
    [
        'cta__link',
    ],
    [
        'u-btn',
    ]
);
$navigation_component = new Module(
    [
        'nav',
        $navigation_styles['animation_color'],
    ],
    [
        'u-animate-hide',
        'u-align-middle',
        'u-align-center',
        $navigation_styles['bg_borders']['background_color'],
        $navigation_styles['selection']['color'],
        $navigation_styles['selection']['background_color'],
    ],
);
$navigation_ul_component = new Module(
    [
        'sub-nav',
        'is-navigation-menu',
        $navigation_styles['content_styles']['link_hover_color'],
        $navigation_styles['content_styles']['link_background_hover_color'],
    ],
    [
        $navigation_styles['content_styles']['color'],
        $navigation_styles['content_styles']['link_color'],
        $navigation_styles['content_styles']['link_hover_color'],
        $navigation_styles['content_styles']['link_background_hover_color'],
    ],
);
?>

<header
    data-module="Header"
    data-animation="fade-in"
    data-styles="<?php echo esc_attr( $header_component->styles() ); ?>"
    class="<?php echo esc_attr( $header_component->class_names() ); ?>"
    <?php if ( ! empty( $header_navigation['menu_title_closed'] ) ) : ?>
        data-closed="<?php echo esc_attr( $header_navigation['menu_title_closed'] ); ?>"
    <?php endif; ?>
    <?php if ( ! empty( $header_navigation['menu_title_open'] ) ) : ?>
        data-open="<?php echo esc_attr( $header_navigation['menu_title_open'] ); ?>"
    <?php endif; ?>>
    <?php
    if ( ! empty( $header_logo['logo'] ) ) {
        get_template_part(
            'components/partials-logo',
            null,
            array(
                'image' => $header_logo['logo'],
                'href' => home_url( '/' ),
                'styles' => 'header__logo',
                'mobile_width' => $header_logo['mobile_width'],
                'desktop_width' => $header_logo['desktop_width'],
                'class_names' => 'logo',
                'figure_styles' => '',
                'figure_class_names' => '',
                'animation' => 'fade-in',
                'animation_duration' => 200,
                'rest' => '',
            )
        );
    }
    if ( have_rows( 'header_cta', 'option' ) ) :
        ?>
        <div data-styles="cta">
            <?php
            while ( have_rows( 'header_cta', 'option' ) ) :
                the_row();
                if ( ! empty( get_sub_field( 'link' ) ) ) :
                    get_template_part(
                        'components/partials-link',
                        null,
                        array(
                            'link' => get_sub_field( 'link' ),
                            'styles' => esc_attr( $cta_link_component->styles() ),
                            'class_names' => esc_attr( $cta_link_component->class_names() ),
                        )
                    );
                endif;
            endwhile;
            ?>
        </div>
        <?php
    endif;

    if ( ! empty( $header_navigation ) ) :
        ?>
        <div data-styles="menu">
            <?php
            get_template_part(
                'components/navigation-component',
                null,
                array(
                    'tag' => 'nav',
                    'id' => $header_navigation['menu']->ID,
                    'styles' => $navigation_component->styles(),
                    'class_names' => $navigation_component->class_names(),
                    'ul_styles' => $navigation_ul_component->styles(),
                    'ul_class_names' => $navigation_ul_component->class_names(),
                    'aria_expanded' => 'false',
                )
            );
            ?>
            <button
                aria-expanded="false"
                data-styles="trigger"
                <?php if ( ! empty( $header_navigation['menu_title_closed'] ) ) : ?>
                    aria-label="<?php echo esc_attr( $header_navigation['menu_title_closed'] ); ?>"
                <?php endif; ?>
                class="u-btn">
                <span data-styles="trigger__title">
                    <?php if ( ! empty( $header_navigation['menu_title_closed'] ) ) : ?>
                        <?php echo esc_attr( $header_navigation['menu_title_closed'] ); ?>
                    <?php endif; ?>
                </span>
                <span data-styles="trigger__container">
                    <span data-styles="trigger__bar"></span>
                    <span data-styles="trigger__bar"></span>
                    <span data-styles="trigger__bar"></span>
                    <span data-styles="trigger__bar"></span>
                </span>
            </button>
        </div>
        <?php
    endif;
    ?>
</header>
