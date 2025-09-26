<?php
/**
 * Add Posts Pagination
 *
 * @package Tetloose-Theme
 **/

$_title               = get_sub_field( 'title' );
$pagination_spacing   = get_sub_field( 'pagination_spacing' );
$text_alignment       = get_sub_field( 'text_alignment' );
$pagination_component = new Module(
    [
        'pagination',
    ],
    [
        $pagination_spacing['top'] ?? '',
        $pagination_spacing['bottom'] ?? '',
        $text_alignment ?? '',
    ]
);

pagination(
    array(
        'title'       => $_title ? $_title : 'Pagination',
        'styles'      => esc_attr( $pagination_component->styles() ),
        'class_names' => esc_attr( $pagination_component->class_names() ),
    )
);
