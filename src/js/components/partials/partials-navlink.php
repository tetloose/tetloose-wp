<?php
/**
 * Partials - Navlink
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $navlink_component = new Module(
        [
            $args['styles'],
        ],
        [
            $args['class_names'],
        ]
    );
    ?>
    <a
        data-styles="<?php echo esc_attr( $navlink_component->styles() ); ?>"
        class="<?php echo esc_attr( $navlink_component->class_names() ); ?>"
        href="<?php echo esc_url( $args['href'] ); ?>"
        title="<?php echo esc_attr( titleizeit( $args['title'] ) ); ?>"></a>
    <?php
endif;
