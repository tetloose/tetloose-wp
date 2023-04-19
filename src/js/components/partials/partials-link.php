<?php
/**
 * Partials - Link
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $link_obj ) ) :
    ?>
    <a
        data-styles="<?php echo esc_attr( $link_obj->styles ); ?>"
        href="<?php echo esc_url( $link_obj->link['url'] ); ?>"
        <?php if ( ! empty( $link_obj->link['target'] ) ) : ?>
            target="<?php echo esc_attr( $link_obj->link['target'] ); ?>"
        <?php endif ?>
        class="<?php echo esc_attr( $link_obj->class_names ); ?>">
        <span>
            <?php echo esc_html( $link_obj->link['title'] ); ?>
        </span>
    </a>
    <?php
endif;
