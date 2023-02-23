<?php
/**
 * Header
 *
 * @package Tetloose-Theme
 */

$header_cta = get_field( 'header_cta', 'option' );
$class_names = new ClassNames(
    [
        get_field( 'headerBackgroundColour', 'option' ),
        get_field( 'headerBorderColour', 'option' ) ? 'u-hairline-bottom ' . get_field( 'headerBorderColour', 'option' ) : '',
        'u-animate-hide',
    ],
    [
        get_field( 'headerFontColour', 'option' ),
    ]
);
?>
<header
    class="<?php echo esc_attr( $class_names->container() ); ?>"
    data-module="Header"
    data-animation="fade-in">
    <?php
    $logo = (object) [
        'image' => get_field( 'header_logo', 'option' ),
        'href' => home_url( '/' ),
        'class_name' => 'header__logo',
        'figure_class_name' => 'header__logo-figure',
        'animation' => 'fade-in',
        'animation_duration' => 200,
    ];
    include( locate_template( '/inc/components/logo-component.php' ) );
    ?>
    <?php if ( have_rows( 'header_cta', 'option' ) ) : ?>
        <div
            data-styles="header__cta"
            class="<?php echo esc_attr( $class_names->font() ); ?>">
            <?php
            while ( have_rows( 'header_cta', 'option' ) ) :
                the_row();
                $_link = (object) [
                    'link' => get_sub_field( 'link' ),
                    'class_name' => 'header__cta-link',
                ];
                include( locate_template( '/inc/components/partials-link.php' ) );
            endwhile;
            ?>
        </div>
    <?php endif; ?>
    <?php get_template_part( '/inc/components/menu', 'component' ); ?>
</header>
