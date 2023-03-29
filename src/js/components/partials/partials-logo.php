<?php
/**
 * Partials - Logo
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
            data-animation="<?php echo esc_attr( $logo->animation ); ?>"
            <?php if ( ! empty( $logo->href ) ) : ?>
                href="<?php echo esc_url( $logo->href ); ?>"
            <?php endif; ?>
            tab-index="0"
            data-styles="<?php echo esc_attr( $logo->styles ); ?>"
            class="<?php echo esc_attr( $logo->class_names ); ?>">
            <?php
            $image = (object) [
                'image' => $logo->image,
                'styles' => esc_attr( $logo->figure_styles ),
                'class_names' => esc_attr( $logo->figure_class_names ),
                'animation' => esc_attr( $logo->animation ),
                'animation_duration' => esc_attr( $logo->animation_duration ),
            ];
            include( locate_template( '/inc/components/partials-figure.php' ) );
            ?>
        </<?php echo esc_attr( $el ); ?>>
    <?php
endif;
