<?php
/**
 * Partials - Figure
 *
 * @package Tetloose-Theme
 */

?>
<?php if ( ! empty( $image ) ) : ?>
    <figure
        class="u-figure js-figure u-skeleton-figure <?php echo esc_attr( $image->class_names ); ?>"
        data-styles="<?php echo esc_attr( $image->styles ); ?>"
        data-animation="<?php echo esc_attr( $image->animation ); ?>"
        data-duration="<?php echo esc_attr( $image->animation_duration ); ?>"
        data-alt="<?php echo esc_attr( $image->image['alt'] ); ?>"
        data-src="<?php echo esc_attr( $image->image['sizes']['sml'] ); ?>"
        data-srcset="
            <?php echo esc_attr( $image->image['sizes']['xxlrg'] ); ?> 1520w,
            <?php echo esc_attr( $image->image['sizes']['xlrg'] ); ?> 1280w,
            <?php echo esc_attr( $image->image['sizes']['lrg'] ); ?> 1024w,
            <?php echo esc_attr( $image->image['sizes']['med'] ); ?> 768w,
            <?php echo esc_attr( $image->image['sizes']['sml'] ); ?> 320w"
    ></figure>
<?php endif; ?>
