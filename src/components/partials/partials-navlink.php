<?php
/**
 * Partials - Nav link
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
    ?>
    <a
        data-styles="<?php echo esc_attr( $component->styles() ?? '' ); ?>"
        class="<?php echo esc_attr( $component->class_names() ?? '' ); ?>"
        href="<?php echo esc_url( $args['href'] ?? '' ); ?>"
        title="<?php echo esc_attr( title_case( $args['title'] ?? '' ) ); ?>"
        aria-label="<?php echo esc_attr( title_case( $args['title'] ?? '' ) ); ?>"></a>
    <?php
endif;
