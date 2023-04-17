<?php
/**
 * Header
 *
 * @package Tetloose-Theme
 */

$header_logo = get_field( 'header_logo', 'option' );
$header_cta = get_field( 'header_cta', 'option' );
$header_styles = get_field( 'header_styles', 'option' );
$header_component = new Module(
    [
        'header',
    ],
    [
        'u-animate-hide',
        $header_styles['bg_borders']['background_color'],
        $header_styles['bg_borders']['border_color'] ? 'u-border-b ' . $header_styles['bg_borders']['border_color'] : '',
        $header_styles['btn_styles']['color'],
        $header_styles['btn_styles']['border_color'],
        $header_styles['btn_styles']['background_color'],
        $header_styles['btn_styles']['hover_color'],
        $header_styles['btn_styles']['border_hover_color'],
        $header_styles['btn_styles']['background_hover_color'],
        $header_styles['active_btn']['active_color'],
        $header_styles['active_btn']['active_hover_color'],
    ]
);
$cta_link_component = new Module(
    [
        'cta__link',
    ],
    [
        'u-btn',
        'is-block',
    ]
);
?>
<header
    data-module="Header"
    data-animation="fade-in"
    data-styles="<?php echo esc_attr( $header_component->styles() ); ?>"
    class="<?php echo esc_attr( $header_component->class_names() ); ?>">
    <?php
    $logo_obj = (object) [
        'image' => $header_logo['logo'],
        'href' => home_url( '/' ),
        'styles' => 'header__logo',
        'class_names' => 'logo',
        'figure_styles' => '',
        'figure_class_names' => '',
        'animation' => 'fade-in',
        'animation_duration' => 200,
    ];
    include( locate_template( '/components/partials-logo.php' ) );
    if ( have_rows( 'header_cta', 'option' ) ) :
        ?>
        <div data-styles="cta">
            <?php
            while ( have_rows( 'header_cta', 'option' ) ) :
                the_row();
                $link_obj = (object) [
                    'link' => get_sub_field( 'link' ),
                    'styles' => esc_attr( $cta_link_component->styles() ),
                    'class_names' => esc_attr( $cta_link_component->class_names() ),
                ];
                include( locate_template( '/components/partials-link.php' ) );
            endwhile;
            ?>
        </div>
        <?php
    endif;
    get_template_part( '/components/menu', 'component' );
    ?>
</header>
