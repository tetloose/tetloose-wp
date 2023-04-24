<?php
/**
 * Partials - Link
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $link_component = new Module(
        [
            $args['styles'],
        ],
        [
            $args['class_names'],
        ]
    );
    ?>
    <a
        data-styles="<?php echo esc_attr( $link_component->styles() ); ?>"
        class="<?php echo esc_attr( $link_component->class_names() ); ?>"
        <?php if ( ! empty( $args['link']['target'] ) ) : ?>
            target="<?php echo esc_attr( $args['link']['target'] ); ?>"
        <?php endif ?>
        href="<?php echo esc_url( $args['link']['url'] ); ?>">
        <span>
            <?php echo esc_html( $args['link']['title'] ); ?>
        </span>
    </a>
    <?php
endif;
