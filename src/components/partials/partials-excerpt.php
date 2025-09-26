<?php
/**
 * Partials - Excerpt
 *
 * @package Tetloose-Theme
 */

$the_date          = new DateTime( get_the_date() );
$post_date         = $the_date->format( 'd/m/Y' );
$excerpt           = get_field( 'excerpt' );
$permalink         = get_the_permalink();
$content           = isset( $excerpt['description'] )
    ? '<h3><span data-styles="excerpt__time" class="u-small">' . esc_attr( $post_date ) . '</span>' . wp_trim_words( esc_attr( get_the_title() ), 3, '<span class="u-small">...</span>' ) . '</h3> <p>' . wp_trim_words( esc_attr( $excerpt['description'] ), 10, '<span class="u-small">...</span>' ) . '</p>'
    : '';
$content          .= isset( $excerpt['button_text'] ) && ! empty( $permalink )
    ? '<p><a class="u-btn is-dark is-inline" data-styles="excerpt__btn" href="' . esc_url( $permalink ) . '">' . esc_attr( $excerpt['button_text'] ) . '</a></p>'
    : '';
$excerpt_component = new Module(
    [
        'excerpt',
        isset( $args['styles'] ) ? $args['styles'] : '',
    ],
    [
        isset( $args['class_names'] ) ? $args['class_names'] : '',
    ]
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
                'image'              => $excerpt['image'],
                'styles'             => 'excerpt__image',
                'class_names'        => 'is-cover u-ratio-3x2',
                'animation_duration' => 400,
            )
        );
    endif;
    if ( ! empty( $content ) ) :
        get_template_part(
            'components/partials-content',
            null,
            array(
                'styles'      => 'excerpt__content',
                'class_names' => 'u-text-align-center',
                'content'     => $content,
            )
        );
    endif;
    ?>
</article>
