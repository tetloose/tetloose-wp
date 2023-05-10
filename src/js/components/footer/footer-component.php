<?php
/**
 * Footer
 *
 * @package Tetloose-Theme
 */

$footer_navigation = get_field( 'footer_navigation', 'option' );
$footer_description = get_field( 'footer_description', 'option' ) ? get_field( 'footer_description', 'option' ) : '';
$footer_bg_borders = get_field( 'footer_bg_borders', 'option' );
$footer_content_styles = get_field( 'footer_content_styles', 'option' );
$footer_selection = get_field( 'footer_selection', 'option' );
$footer_component = new Module(
    [
        'footer',
    ],
    [
        'u-animate-hide',
        $footer_bg_borders['background_color'],
        $footer_bg_borders['border_color']
            ? 'u-border-t ' . $footer_bg_borders['border_color']
            : '',
        $footer_content_styles['color'],
        $footer_content_styles['link_color'],
        $footer_content_styles['link_hover_color'],
        $footer_content_styles['link_background_hover_color'],
        $footer_selection['color'],
        $footer_selection['background_color'],
    ]
);
$sub_nav_component = new Module(
    [
        'sub-nav',
        'is-inline',
        $footer_content_styles['link_hover_color'],
        $footer_content_styles['link_background_hover_color'],
    ],
    [
        'u-animate-hide',
    ]
);
?>
<footer
    data-module="Footer"
    data-animation="fade-in"
    data-styles="<?php echo esc_attr( $footer_component->styles() ); ?>"
    class="<?php echo esc_attr( $footer_component->class_names() ); ?>">
    <?php
    get_template_part(
        'components/social-component',
        null,
        array(
            'styles' => 'footer__social',
            'class_names' => '',
        )
    );
    ?>
    <nav data-styles="footer__nav">
        <?php
        if ( ! empty( $footer_navigation->ID ) ) :
            get_template_part(
                'components/navigation-component',
                null,
                array(
                    'id' => $footer_navigation->ID,
                    'styles' => $sub_nav_component->styles(),
                    'class_names' => $sub_nav_component->class_names(),
                )
            );
        endif
        ?>
    </nav>
    <?php
    get_template_part(
        'components/partials-content',
        null,
        array(
            'styles' => 'footer__content',
            'class_names' => '',
            'content' => '<p><small>' . wp_kses_post( '<sup>&copy;</sup>' . esc_attr( gmdate( 'Y' ) ) . ' ' . get_bloginfo() . ' ' . $footer_description ) . '</small></p>',
        )
    );
    ?>
</footer>
