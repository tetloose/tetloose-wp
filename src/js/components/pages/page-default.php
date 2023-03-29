<?php
/**
 * Page - Default
 *
 * @package Tetloose-Theme
 */

get_header();
if ( have_posts() ) {
    if ( post_password_required( $post ) ) {
        get_template_part( '/inc/components/partials', 'password' );
    } else {
        while ( have_posts() ) :
            the_post();
            get_template_part( '/inc/components/component', 'loader' );
        endwhile;
    }
} else {
    get_template_part( '/inc/components/partials', 'no-posts' );
}
get_footer();
