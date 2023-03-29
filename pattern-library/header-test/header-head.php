<?php
/**
 * Header
 *
 * @package Tetloose-Theme
 */

$header_cta = get_field( 'header_cta', 'option' );
$header_styles = new ReplaceClassName(
    [
        'header',
        get_field( 'header_bg_color', 'option' ),
        get_field( 'header_border_color', 'option' ) ? 'border-b ' . get_field( 'header_border_color', 'option' ) : '',
    ]
);
$cta_link_styles = new ReplaceClassName(
    [
        'header__cta-link',
        get_field( 'header_border_color', 'option' ) ? 'border-t-r-l ' . get_field( 'header_border_color', 'option' ) : '',
        get_field( 'header_cta_color', 'option' ),
    ]
);
?>
<header
    data-module="Header"
    data-animation="fade-in"
    data-styles="<?php echo esc_attr( $header_styles->names() ); ?>">
    <?php
    $logo = (object) [
        'image' => get_field( 'header_logo', 'option' ),
        'href' => home_url( '/' ),
        'class_name' => 'header__logo',
        'figure_class_name' => '',
        'animation' => 'fade-in',
        'animation_duration' => 200,
    ];
    include( locate_template( '/inc/components/logo-component.php' ) );
    ?>
    <?php if ( have_rows( 'header_cta', 'option' ) ) : ?>
        <div
            data-styles="header__cta">
            <?php
            while ( have_rows( 'header_cta', 'option' ) ) :
                the_row();
                $_link = (object) [
                    'link' => get_sub_field( 'link' ),
                    'class_name' => esc_attr( $cta_link_styles->names() ),
                ];
                include( locate_template( '/inc/components/partials-link.php' ) );
            endwhile;
            ?>
        </div>
    <?php endif; ?>
    <?php get_template_part( '/inc/components/menu', 'component' ); ?>
</header>
