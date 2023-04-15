<?php
/**
 * Partials - Figure
 *
 * @package Tetloose-Theme
 */

?>
<?php if ( ! empty( $image_obj ) ) : ?>
    <figure
        class="u-figure js-figure u-skeleton-figure <?php echo esc_attr( $image_obj->class_names ); ?>"
        data-styles="<?php echo esc_attr( $image_obj->styles ); ?>"
        data-animation="<?php echo esc_attr( $image_obj->animation ); ?>"
        data-duration="<?php echo esc_attr( $image_obj->animation_duration ); ?>"
        data-alt="<?php echo esc_attr( $image_obj->image['alt'] ); ?>"
        data-src="<?php echo esc_attr( $image_obj->image['sizes']['sml'] ); ?>"
        data-srcset="
            <?php echo esc_attr( $image_obj->image['sizes']['xxlrg'] ); ?> 1520w,
            <?php echo esc_attr( $image_obj->image['sizes']['xlrg'] ); ?> 1280w,
            <?php echo esc_attr( $image_obj->image['sizes']['lrg'] ); ?> 1024w,
            <?php echo esc_attr( $image_obj->image['sizes']['med'] ); ?> 768w,
            <?php echo esc_attr( $image_obj->image['sizes']['sml'] ); ?> 320w"
    ></figure>
<?php endif; ?>
