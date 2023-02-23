<?php
/**
 * Header
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $logo ) ) :
    if ( ! empty( $logo->href ) ) {
        $el = 'a';
    } else {
        $el = 'div';
    }
    ?>
        <<?php echo esc_attr( $el ); ?>
            data-module="Logo"
            data-styles="<?php echo esc_attr( $logo->class_name ); ?>"
            data-animation="<?php echo esc_attr( $logo->animation ); ?>"
            <?php if ( ! empty( $logo->href ) ) : ?>
                href="<?php echo esc_url( $logo->href ); ?>"
            <?php endif; ?>>
            <?php
            $image = (object) [
                'image' => $logo->image,
                'class_name' => esc_attr( $logo->figure_class_name ),
                'animation' => esc_attr( $logo->animation ),
                'animation_duration' => esc_attr( $logo->animation_duration ),
            ];
            include( locate_template( '/inc/components/partials-figure.php' ) );
            ?>
        </<?php echo esc_attr( $el ); ?>>
    <?php
endif;
