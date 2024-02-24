<?php
/**
 * Post Nav Content
 *
 * @package Tetloose-Theme
 **/

$_title = get_sub_field( 'title' );

if ( ! empty( $_title ) ) :
    get_template_part(
        'components/partials-content',
        null,
        array(
            'styles' => '',
            'class_names' => 'text-align-center',
            'content' => '<h3>' . $_title . '</h3>',
        )
    );
endif;
