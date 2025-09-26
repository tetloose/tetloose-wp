<?php
/**
 * Plugin Name: Disable Comments Everywhere
 * Description: Permanently disables all comments, trackbacks, and comment UI.
 *
 * @package Tetloose-Theme
 **/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );
add_filter( 'comments_array', '__return_empty_array', 20, 2 );

add_action(
    'init',
    function () {
        foreach ( get_post_types() as $type ) {
            if ( post_type_supports( $type, 'comments' ) ) {
                remove_post_type_support( $type, 'comments' );
            }
            if ( post_type_supports( $type, 'trackbacks' ) ) {
                remove_post_type_support( $type, 'trackbacks' );
            }
        }
    },
    100
);

add_action(
    'admin_menu',
    function () {
        remove_menu_page( 'edit-comments.php' );
    }
);

add_action(
    'admin_init',
    function () {
        global $pagenow;
        if ( $pagenow === 'edit-comments.php' ) {
            wp_safe_redirect( admin_url() );
            exit;
        }
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        update_option( 'default_comment_status', 'closed' );
        update_option( 'default_ping_status', 'closed' );
    }
);

add_action(
    'init',
    function () {
        remove_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 60 );
    }
);

add_action(
    'wp_enqueue_scripts',
    function () {
        wp_deregister_script( 'comment-reply' );
    },
    100
);

add_filter(
    'rest_endpoints',
    function ( $endpoints ) {
        unset( $endpoints['/wp/v2/comments'], $endpoints['/wp/v2/comments/(?P<id>[\d]+)'] );
        return $endpoints;
    }
);

add_filter(
    'xmlrpc_methods',
    function ( $methods ) {
        unset( $methods['pingback.ping'], $methods['pingback.extensions.getPingbacks'] );
        return $methods;
    }
);

add_filter(
    'wp_headers',
    function ( $headers ) {
        unset( $headers['X-Pingback'] );
        return $headers;
    }
);

add_action(
    'template_redirect',
    function () {
        if ( is_comment_feed() ) {
            wp_die( '', '', 410 );
        }
    }
);
