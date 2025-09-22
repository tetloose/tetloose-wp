<?php
/**
 * Post Nav Next
 *
 * @package Tetloose-Theme
 **/

$next_post = get_next_post();

if ( ! empty( $next_post ) ) :
    $next_title = wp_strip_all_tags( str_replace( '"', '', $next_post->post_title ) );

    get_template_part(
        'components/partials-navlink',
        null,
        array(
            'styles'      => 'post-nav__nav-link',
            'class_names' => 'u-icon-next',
            'href'        => get_permalink( $next_post->ID ),
            'title'       => $next_title ? $next_title : '',
        )
    );
endif;
