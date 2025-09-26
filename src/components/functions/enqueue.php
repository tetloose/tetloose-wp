<?php
/**
 * Enqueue function
 *
 * @package Tetloose-Theme
 **/

define( 'USE_JQUERY', getenv( 'USE_JQUERY' ) );
define( 'JQUERY_VERSION', getenv( 'JQUERY_VERSION' ) );

add_action( 'wp_enqueue_scripts', 'scripts', 2 );
add_action( 'wp_enqueue_scripts', 'styles', 20 );

if ( USE_JQUERY !== 'yes' ) {
    add_action( 'wp_enqueue_scripts', 'remove_jquery', 1 );
} else {
    add_action( 'wp_enqueue_scripts', 'add_jquery', 1 );
}

/**
 * Function remove jquery if env is set to yes
 **/
function add_jquery() {
    if ( JQUERY_VERSION ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', esc_attr( JQUERY_VERSION ), [], 'tetloose', false );
        wp_enqueue_script( 'jquery' );
    }
}

/**
 * Function remove jquery if env is set not set to yes
 **/
function remove_jquery() {
    wp_deregister_script( 'jquery' );
}

/**
 * Function Load scripts
 */
function scripts() {
    $ver = null;
    foreach ( get_files( '/assets/js', [ 'main', 'runtime' ] ) as $file ) {
        wp_enqueue_script(
            $file,
            get_stylesheet_directory_uri() . '/assets/js/' . $file,
            array(),
            $ver,
            true
        );
        wp_enqueue_script( $file );
    }
}

/**
 * Function Load styles
 **/
function styles() {
    $version = null;

    wp_dequeue_style( 'classic-theme-styles' );

    foreach ( get_files( '/assets/css', [ 'app' ] ) as $file ) {
        if ( ! str_contains( $file, '.map' ) ) {
            wp_enqueue_style(
                $file,
                get_stylesheet_directory_uri() . '/assets/css/' . $file,
                array(),
                $version,
                false
            );
        }
    }
}

// Dequeue footer style.
add_action( 'wp_footer', 'wp_footer_dequeue_style' );

/**
 * Footer hook,
 * Dequeue footer style.
 **/
function wp_footer_dequeue_style() {
    wp_dequeue_style( 'core-block-supports' );
}
