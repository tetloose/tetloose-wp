<?php
/**
 * Partials - Logo
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $logo_obj ) ) :
    if ( ! empty( $logo_obj->href ) ) {
        $el = 'a';
    } else {
        $el = 'div';
    }
    ?>
        <<?php echo esc_attr( $el ); ?>
            data-animation="<?php echo esc_attr( $logo_obj->animation ); ?>"
            <?php if ( ! empty( $logo_obj->href ) ) : ?>
                href="<?php echo esc_url( $logo_obj->href ); ?>"
            <?php endif; ?>
            tab-index="0"
            data-styles="<?php echo esc_attr( $logo_obj->styles ); ?>"
            class="<?php echo esc_attr( $logo_obj->class_names ); ?>">
            <?php
            $image_obj = (object) [
                'image' => $logo_obj->image,
                'styles' => esc_attr( $logo_obj->figure_styles ),
                'class_names' => esc_attr( $logo_obj->figure_class_names ),
                'animation' => esc_attr( $logo_obj->animation ),
                'animation_duration' => esc_attr( $logo_obj->animation_duration ),
            ];
            include( locate_template( '/components/partials-figure.php' ) );
            ?>
        </<?php echo esc_attr( $el ); ?>>
    <?php
endif;
