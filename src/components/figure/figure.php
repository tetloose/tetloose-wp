<?php
/**
 *  Figure Component
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $figure = new Module(
        [
            $args['styles'],
        ],
        [
            'u-figure',
            $args['class_names'],
        ]
    );
    ?>
    <figure
        data-module="Figure"
        data-duration="<?php echo esc_attr( $args['animation_duration'] ); ?>"
        data-styles="<?php echo esc_attr( $figure->styles() ); ?>"
        data-image-alt="<?php echo esc_attr( $args['image']['alt'] ); ?>"
        data-image-sml="<?php echo esc_attr( $args['image']['sizes']['sml'] ); ?>"
        data-image-med="<?php echo esc_attr( $args['image']['sizes']['med'] ); ?>"
        data-image-lrg="<?php echo esc_attr( $args['image']['sizes']['lrg'] ); ?>"
        data-image-xlrg="<?php echo esc_attr( $args['image']['sizes']['xlrg'] ); ?>"
        data-image-xxlrg="<?php echo esc_attr( $args['image']['sizes']['xxlrg'] ); ?>"
        class="<?php echo esc_attr( $figure->class_names() ); ?>"
    >
        <img
            data-placeholder="true"
            class="u-figure__img"
            src="<?php echo esc_attr( $args['image']['sizes']['sml'] ); ?>"
            alt="">
    </figure>
    <?php
endif;
