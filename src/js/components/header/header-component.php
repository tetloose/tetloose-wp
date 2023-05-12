<?php
/**
 * Header
 *
 * @package Tetloose-Theme
 */

$header_logo = get_field( 'header_logo', 'option' );
$header_cta = get_field( 'header_cta', 'option' );
$header_button_title_open = get_field( 'header_button_title_open', 'option' );
$header_button_title_closed = get_field( 'header_button_title_closed', 'option' );
$header_navigation = get_field( 'header_navigation', 'option' );
$header_bg_borders = get_field( 'header_bg_borders', 'option' );
$header_selection = get_field( 'header_selection', 'option' );
$cta_btn_styles = get_field( 'cta_btn_styles', 'option' );
$trigger_btn_styles = get_field( 'trigger_btn_styles', 'option' );
$trigger_active_btn = get_field( 'trigger_active_btn', 'option' );
$navigation_bg_borders = get_field( 'navigation_bg_borders', 'option' );
$navigation_content_styles = get_field( 'navigation_content_styles', 'option' );
$navigation_animation_color = get_field( 'navigation_animation_color', 'option' );
$header_component = new Module(
    [
        'header',
    ],
    [
        'u-animate-hide',
        $header_bg_borders['background_color'],
        $header_bg_borders['border_color']
            ? 'u-border-b ' . $header_bg_borders['border_color']
            : '',
        $header_selection['color'],
        $header_selection['background_color'],
    ]
);
?>

<header
    data-module="Header"
    data-animation="fade-in"
    data-styles="<?php echo esc_attr( $header_component->styles() ); ?>"
    class="<?php echo esc_attr( $header_component->class_names() ); ?>"
    <?php if ( ! empty( $header_button_title_closed ) ) : ?>
        data-closed="<?php echo esc_attr( $header_button_title_closed ); ?>"
    <?php endif; ?>
    <?php if ( ! empty( $header_button_title_open ) ) : ?>
        data-open="<?php echo esc_attr( $header_button_title_open ); ?>"
    <?php endif; ?>>
    <?php
    if ( isset( $header_logo['image'] ) ) {
        get_template_part(
            'components/partials-logo',
            null,
            array(
                'image' => $header_logo['image'],
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
        $cta_component = new Module(
            [
                'cta',
            ],
            [
                $cta_btn_styles['color'],
                $cta_btn_styles['border_color'],
                $cta_btn_styles['background_color'],
                $cta_btn_styles['hover_color'],
                $cta_btn_styles['border_hover_color'],
                $cta_btn_styles['background_hover_color'],
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
        ?>
        <div
            data-styles="<?php echo esc_attr( $cta_component->styles() ); ?>"
            class="<?php echo esc_attr( $cta_component->class_names() ); ?>">
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

    if ( isset( $header_navigation->ID ) ) :
        $trigger_component = new Module(
            [
                'menu',
            ],
            [
                $trigger_btn_styles['color'],
                $trigger_btn_styles['border_color'],
                $trigger_btn_styles['background_color'],
                $trigger_btn_styles['hover_color'],
                $trigger_btn_styles['border_hover_color'],
                $trigger_btn_styles['background_hover_color'],
                $trigger_active_btn['active_color'],
                $trigger_active_btn['active_hover_color'],
            ],
        );
        $navigation_component = new Module(
            [
                'nav',
                $navigation_animation_color,
            ],
            [
                'u-align-middle',
                'u-align-center',
                $navigation_bg_borders['background_color'],
                $navigation_bg_borders['border_color']
                    ? 'u-border-b ' . $header_bg_borders['border_color']
                    : '',
            ],
        );
        $navigation_ul_component = new Module(
            [
                'sub-nav',
                'is-navigation-menu',
                $navigation_content_styles['link_hover_color'],
                $navigation_content_styles['link_background_hover_color'],
            ],
            [
                $navigation_content_styles['color'],
                $navigation_content_styles['link_color'],
                $navigation_content_styles['link_hover_color'],
                $navigation_content_styles['link_background_hover_color'],
            ],
        );
        ?>
        <div
            data-styles="<?php echo esc_attr( $trigger_component->styles() ); ?>"
            class="<?php echo esc_attr( $trigger_component->class_names() ); ?>">
            <?php
            get_template_part(
                'components/navigation-component',
                null,
                array(
                    'tag' => 'nav',
                    'id' => $header_navigation->ID,
                    'styles' => $navigation_component->styles(),
                    'class_names' => $navigation_component->class_names(),
                    'ul_styles' => $navigation_ul_component->styles(),
                    'ul_class_names' => $navigation_ul_component->class_names(),
                    'aria_expanded' => 'false',
                    'animation' => 'hide',
                )
            );
            ?>
            <button
                aria-expanded="false"
                data-styles="trigger"
                <?php if ( ! empty( $header_button_title_closed ) ) : ?>
                    aria-label="<?php echo esc_attr( $header_button_title_closed ); ?>"
                <?php endif; ?>
                class="u-btn">
                <span data-styles="trigger__title">
                    <?php if ( ! empty( $header_button_title_closed ) ) : ?>
                        <?php echo esc_attr( $header_button_title_closed ); ?>
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
