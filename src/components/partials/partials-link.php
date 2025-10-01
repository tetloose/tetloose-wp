<?php
/**
 * Partials - Link
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $component = new Module(
        [
            $args['styles'] ?? '',
        ],
        [
            $args['class_names'] ?? '',
        ]
    );
    $icon      = new Module(
        [],
        [
            $args['icon_class_names'] ?? '',
        ]
    );
    ?>
    <a
        data-styles="<?php echo esc_attr( $component->styles() ); ?>"
        class="<?php echo esc_attr( $component->class_names() ); ?>"
        <?php if ( ! empty( $args['link']['target'] ) ) : ?>
            target="<?php echo esc_attr( $args['link']['target'] ?? '' ); ?>"
        <?php endif ?>
        href="<?php echo esc_url( $args['link']['url'] ?? '' ); ?>"
    >
        <span>
            <?php echo esc_html( $args['link']['title'] ?? '' ); ?>
        </span>
        <?php if ( ! empty( $args['icon'] ) ) : ?>
            <span class="<?php echo esc_attr( $icon->class_names() ?? '' ); ?>">
                <i class="u-icon-<?php echo esc_attr( $args['icon'] ?? '' ); ?>"></i>
            </span>
        <?php endif; ?>
    </a>
    <?php
endif;
