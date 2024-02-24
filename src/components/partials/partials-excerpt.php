<?php
/**
 * Partials - Excerpt
 *
 * @package Tetloose-Theme
 */

$the_date = new DateTime( get_the_date() );
$post_date = $the_date->format( 'd/m/Y' );
$excerpt = get_field( 'excerpt' );
$permalink = get_the_permalink();
$content = isset( $excerpt['description'] )
    ? '<h3><span data-styles="excerpt__time" class="u-small">' . esc_attr( $post_date ) . '</span>' . wp_trim_words( esc_attr( get_the_title() ), 3, '<span class="u-small">...</span>' ) . '</h3> <p>' . wp_trim_words( esc_attr( $excerpt['description'] ), 10, '<span class="u-small">...</span>' ) . '</p>'
    : '';
$content .= isset( $excerpt['button_text'] ) && ! empty( $permalink )
    ? '<p><a class="u-btn is-inline" data-styles="excerpt__btn" href="' . esc_url( $permalink ) . '">' . esc_attr( $excerpt['button_text'] ) . '</a></p>'
    : '';
$excerpt_component = new Module(
    [
        'excerpt',
        isset( $args['styles'] ) ? $args['styles'] : '',
        'is-' . get_post_type(),
    ],
    [
        $excerpt['background_color'],
        $excerpt['color'],
        $excerpt['btn_styles']['color'],
        $excerpt['btn_styles']['border_color'],
        $excerpt['btn_styles']['background_color'],
        $excerpt['btn_styles']['hover_color'],
        $excerpt['btn_styles']['border_hover_color'],
        $excerpt['btn_styles']['background_hover_color'],
        $excerpt['selection']['color'],
        $excerpt['selection']['background_color'],
        isset( $args['class_names'] ) ? $args['class_names'] : '',
    ]
);
$figure_component = new Module(
    [
        'excerpt__image',
        $excerpt['image_styles']['image_size'],
        $excerpt['image_styles']['image_alignment'],
    ],
    [
        'u-bg-image',
        $excerpt['image_styles']['image_gradient'],
    ]
);
$content_component = new Module(
    [
        'excerpt__content',
    ],
    []
);
?>

<article
    data-styles="<?php echo esc_attr( $excerpt_component->styles() ); ?>"
    class="<?php echo esc_attr( $excerpt_component->class_names() ); ?>">
    <?php
    if ( ! empty( $excerpt['image'] ) ) :
        get_template_part(
            'components/figure',
            null,
            array(
                'image' => $excerpt['image'],
                'styles' => esc_attr( $figure_component->styles() ),
                'class_names' => esc_attr( $figure_component->class_names() ),
                'animation_duration' => 400,
            )
        );
    endif;
    if ( ! empty( $content ) ) :
        get_template_part(
            'components/partials-content',
            null,
            array(
                'styles' => esc_attr( $content_component->styles() ),
                'class_names' => '',
                'content' => '<div data-styles="excerpt__content-inside">' . $content . '</div>',
            )
        );
    endif;
    ?>
</article>
