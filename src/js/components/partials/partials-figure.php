<?php
/**
 * Partials - Figure
 *
 * @package Tetloose-Theme
 */

?>
<?php
if ( ! empty( $args ) ) :
    $figure_component = new Module(
        [
            $args['styles'],
        ],
        [
            'u-figure',
            'js-figure',
            'u-skeleton-figure',
            $args['class_names'],
        ]
    );
    ?>
    <figure
        data-styles="<?php echo esc_attr( $figure_component->styles() ); ?>"
        class="<?php echo esc_attr( $figure_component->class_names() ); ?>"
        data-animation="<?php echo esc_attr( $args['animation'] ); ?>"
        data-duration="<?php echo esc_attr( $args['animation_duration'] ); ?>"
        data-alt="<?php echo esc_attr( $args['image']['alt'] ); ?>"
        data-src="<?php echo esc_attr( $args['image']['sizes']['sml'] ); ?>"
        data-srcset="
            <?php echo esc_attr( $args['image']['sizes']['xxlrg'] ); ?> 1520w,
            <?php echo esc_attr( $args['image']['sizes']['xlrg'] ); ?> 1280w,
            <?php echo esc_attr( $args['image']['sizes']['lrg'] ); ?> 1024w,
            <?php echo esc_attr( $args['image']['sizes']['med'] ); ?> 768w,
            <?php echo esc_attr( $args['image']['sizes']['sml'] ); ?> 320w"
    ></figure>
<?php endif; ?>
