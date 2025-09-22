<?php
/**
 * Post Nav Prev
 *
 * @package Tetloose-Theme
 **/

$prev_post = get_previous_post();

if ( ! empty( $prev_post ) ) :
    $prev_title = wp_strip_all_tags( str_replace( '"', '', $prev_post->post_title ) );

    get_template_part(
        'components/partials-navlink',
        null,
        array(
            'styles'      => 'post-nav__nav-link',
            'class_names' => 'u-icon-prev',
            'href'        => get_permalink( $prev_post->ID ),
            'title'       => $prev_title ? $prev_title : '',
        )
    );
endif;
