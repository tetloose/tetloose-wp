<?php
/**
 * Partials - Pagination
 *
 * @package Tetloose-Theme
 */

$_pages = pagination();

if ( ! empty( $args ) && ! empty( $_pages ) && is_array( $_pages ) ) :
    $component = new Module(
        [
            $args['styles'] ?? '',
        ],
        [
            $args['class_names'] ?? '',
        ]
    );
    ?>
    <div
        data-styles="<?php echo esc_attr( $component->styles() ); ?>"
        class="<?php echo esc_attr( $component->class_names() ); ?>"
    >
        <nav>
            <?php
            foreach ( $_pages as $_page ) :
                echo wp_kses_post( $_page );
            endforeach;
            ?>
        </nav>
    </div>
    <?php
endif;
