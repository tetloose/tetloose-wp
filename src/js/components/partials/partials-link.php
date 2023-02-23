<?php
/**
 * Partials - Link
 *
 * @package Tetloose-Theme
 */

?>
<?php if ( ! empty( $_link ) ) : ?>
    <a
        data-styles="<?php echo esc_attr( $_link->class_name ); ?>"
        href="<?php echo esc_url( $_link->link['url'] ); ?>"
        <?php if ( ! empty( $_link->link['target'] ) ) : ?>
            target="<?php echo esc_attr( $_link->link['target'] ); ?>"
        <?php endif ?>
    >
        <?php echo esc_html( $_link->link['title'] ); ?>
    </a>
<?php endif; ?>
