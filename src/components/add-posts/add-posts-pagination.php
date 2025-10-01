<?php
/**
 * Add Posts Pagination
 *
 * @package Tetloose-Theme
 **/

$_title     = get_sub_field( 'title' );
$spacing    = get_sub_field( 'pagination_spacing' );
$pagination = new Module(
    [
        'pagination',
    ],
    [
        'l-row__col',
        $spacing['top'] ?? '',
        $spacing['bottom'] ?? '',
    ]
);

get_template_part(
    'components/partials-pagination',
    null,
    array(
        'styles'      => esc_attr( $pagination->styles() ),
        'class_names' => esc_attr( $pagination->class_names() ),
    )
);
