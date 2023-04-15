<?php
/**
 * Archive - Landing
 *
 * @package Tetloose-Theme
 */

get_header();
if ( have_posts() ) {
    if ( post_password_required( $post ) ) {
        get_template_part( '/inc/components/page', 'password' );
    } else {
        get_template_part( '/inc/components/component', 'loader' );
    }
} else {
    get_template_part( '/inc/components/page', 'no-posts' );
}
get_footer();
