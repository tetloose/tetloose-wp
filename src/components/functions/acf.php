<?php
/**
 *  ACF
 *
 * @package Tetloose-Theme
 **/

/**
 * ACF json Export.
 **/
add_filter(
    'acf/settings/save_json',
    function () {
        return esc_url( str_replace( 'web/wp/', '', ABSPATH ) . 'src/acf' );
    }
);

/**
 * ACF json Import.
 */
add_filter(
    'acf/settings/load_json',
    function ( $paths ) {
        unset( $paths[0] );

        if ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ) {
            $paths[] = esc_url( get_theme_file_path() . '/acf' );
        } else {
            $paths[] = esc_url( str_replace( 'web/wp/', '', ABSPATH ) . 'src/acf' );
        }

        return $paths;
    }
);
