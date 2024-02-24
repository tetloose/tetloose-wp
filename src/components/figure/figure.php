<?php
/**
 *  Figure Component
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $figure_component = new Module(
        [
            $args['styles'],
        ],
        [
            $args['class_names'],
            'u-animate-figure',
        ]
    );
    ?>
    <figure
        data-module="Figure"
        data-type="figure"
        data-duration="<?php echo esc_attr( $args['animation_duration'] ); ?>"
        data-styles="figure <?php echo esc_attr( $figure_component->styles() ); ?>"
        data-image-alt="<?php echo esc_attr( $args['image']['alt'] ); ?>"
        data-image-sml="<?php echo esc_attr( $args['image']['sizes']['sml'] ); ?>"
        data-image-med="<?php echo esc_attr( $args['image']['sizes']['med'] ); ?>"
        data-image-lrg="<?php echo esc_attr( $args['image']['sizes']['lrg'] ); ?>"
        data-image-xlrg="<?php echo esc_attr( $args['image']['sizes']['xlrg'] ); ?>"
        data-image-xxlrg="<?php echo esc_attr( $args['image']['sizes']['xxlrg'] ); ?>"
        class="<?php echo esc_attr( $figure_component->class_names() ); ?>">
        <img
            class="js-figurePlaceholder"
            src="<?php echo esc_attr( $args['image']['sizes']['sml'] ); ?>"
            alt="">
    </figure>
    <?php
endif;
