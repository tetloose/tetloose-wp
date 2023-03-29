<?php
/**
 * ACF loader asdf
 *
 * @package Tetloose-Theme
 */

if ( have_rows( 'components' ) ) {
    $directory = dirname( __DIR__ ) . '/components';

    while ( have_rows( 'components' ) ) :
        the_row();

        if ( file_exists( $directory ) ) {
            foreach ( glob( $directory . '/components-*.php' ) as $file ) {
                $component = explode( 'components-', $file );
                $component = end( $component );
                $component = explode( '.php', $component );
                $component = implode( $component );

                get_template_part( '/inc/components/components', $component );
            }
        }
    endwhile;
}
