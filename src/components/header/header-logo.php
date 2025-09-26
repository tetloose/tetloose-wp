<?php
/**
 * Header
 *
 * @package Tetloose-Theme
 */

$header_logo = get_field( 'header_logo', 'option' );

if ( $header_logo && $header_logo['image'] && isset( $header_logo['image'] ) ) :
    ?>
    <a
        data-styles="header__logo"
        class="logo"
        href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php
        get_template_part(
            'components/figure',
            null,
            array(
                'image'              => $header_logo['image'],
                'styles'             => 'header__logo-img',
                'class_names'        => 'is-left-center is-contain',
                'animation_duration' => 400,
            )
        );
        ?>
    </a>
    <?php
endif;
