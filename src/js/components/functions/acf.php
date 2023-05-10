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
        $paths[] = esc_url( str_replace( 'web/wp/', '', ABSPATH ) . 'src/acf' );

        return $paths;
    }
);

/**
 * ACF options page.
 */
if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-admin-home',
            'position' => 1,
            'page_title' => 'Theme',
            'menu_title' => 'Theme',
            'menu_slug' => 'theme',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-star-filled',
            'position' => 1,
            'page_title' => 'Settings',
            'menu_title' => 'Settings',
            'menu_slug' => 'settings',
            'parent_slug' => 'theme',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-star-filled',
            'position' => 2,
            'page_title' => 'Header',
            'menu_title' => 'Header',
            'menu_slug' => 'header',
            'parent_slug' => 'theme',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-star-filled',
            'position' => 3,
            'page_title' => 'Menu',
            'menu_title' => 'Menu',
            'menu_slug' => 'menu',
            'parent_slug' => 'theme',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-star-filled',
            'position' => 4,
            'page_title' => 'Footer',
            'menu_title' => 'Footer',
            'menu_slug' => 'footer',
            'parent_slug' => 'theme',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-star-filled',
            'position' => 5,
            'page_title' => 'Social',
            'menu_title' => 'Social',
            'menu_slug' => 'social',
            'parent_slug' => 'theme',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-media-text',
            'position' => 1,
            'page_title' => 'Static Content',
            'menu_title' => 'Static Content',
            'menu_slug' => 'static-content',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-media-text',
            'position' => 1,
            'page_title' => '404',
            'menu_title' => '404',
            'menu_slug' => '404',
            'parent_slug' => 'static-content',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-media-text',
            'position' => 1,
            'page_title' => 'No Posts',
            'menu_title' => 'No Posts',
            'menu_slug' => 'no-posts',
            'parent_slug' => 'static-content',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-media-text',
            'position' => 2,
            'page_title' => 'Password Protected',
            'menu_title' => 'Password Protected',
            'menu_slug' => 'password-protected',
            'parent_slug' => 'static-content',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );

    acf_add_options_page(
        array(
            'icon_url' => 'dashicons-welcome-write-blog',
            'position' => 3,
            'page_title' => 'News Landing',
            'menu_title' => 'News Landing',
            'menu_slug' => 'news-landing',
            'parent_slug' => 'edit.php?post_type=news',
            'capability' => 'edit_posts',
            'redirect' => false,
            'autoload' => true,
        )
    );
}
