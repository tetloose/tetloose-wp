<?php
/**
 * Archive - Single
 *
 * @package Tetloose-Theme
 */

get_header();
if ( have_posts() ) {
    if ( post_password_required( $post ) ) {
        get_template_part( '/inc/components/page', 'password' );
    } else {
        while ( have_posts() ) :
            the_post();
            get_template_part( '/inc/components/component', 'loader' );
        endwhile;
    }
} else {
    get_template_part( '/inc/components/page', 'no-posts' );
}
get_footer();
