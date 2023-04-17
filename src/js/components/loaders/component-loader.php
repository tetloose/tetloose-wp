<?php
/**
 * ACF Component Loader
 *
 * @package Tetloose-Theme
 */

if ( is_archive() ) {
    if ( have_rows( get_post_type() . '_components', 'option' ) ) {
        $directory = dirname( __DIR__ ) . '/components';

        while ( have_rows( get_post_type() . '_components', 'option' ) ) :
            the_row();

            if ( file_exists( $directory ) ) {
                foreach ( glob( $directory . '/components-*.php' ) as $file ) {
                    $component = explode( 'components-', $file );
                    $component = end( $component );
                    $component = explode( '.php', $component );
                    $component = implode( $component );

                    get_template_part( '/components/components', $component );
                }
            }
        endwhile;
    }
} else {
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

                    get_template_part( '/components/components', $component );
                }
            }
        endwhile;
    }
}
