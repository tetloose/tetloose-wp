<?php
/**
 * Add Posts Pagination
 *
 * @package Tetloose-Theme
 **/

$pagination_spacing = get_sub_field( 'pagination_spacing' );
$pagination_bg_borders = get_sub_field( 'pagination_bg_borders' );
$pagination_content_styles = get_sub_field( 'pagination_content_styles' );
$pagination_selection = get_sub_field( 'pagination_selection' );
$pagination_component = new Module(
    [
        'pagination',
    ],
    [
        $pagination_spacing['top'],
        $pagination_spacing['bottom'],
        $pagination_bg_borders['background_color'],
        $pagination_bg_borders['border_color']
            ? 'u-border-t ' . $pagination_bg_borders['border_color']
            : '',
        $pagination_content_styles['color'],
        $pagination_content_styles['link_color'],
        $pagination_content_styles['link_hover_color'],
        $pagination_content_styles['link_background_hover_color'],
        $pagination_selection['color'],
        $pagination_selection['background_color'],
    ]
);

pagination(
    array(
        'title' => $_title ? $_title : 'Pagination',
        'styles' => esc_attr( $pagination_component->styles() ),
        'class_names' => esc_attr( $pagination_component->class_names() ),
    )
);
