<?php
/**
 * Add Posts Excerpt
 *
 * @package Tetloose-Theme
 **/

$excerpt_component = new Module(
    [
        is_archive()
            ? 'is-archive'
            : 'is-component',
    ],
    [
        'l-row__col',
        is_archive()
            ? 'is-med-half'
            : 'is-med-1-third',
        'no-gutter',
    ]
);

get_template_part(
    'components/partials-excerpt',
    null,
    array(
        'styles'      => esc_attr( $excerpt_component->styles() ),
        'class_names' => esc_attr( $excerpt_component->class_names() ),
    )
);
