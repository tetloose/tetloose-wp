<?php
/**
 * Add Posts Excerpt
 *
 * @package Tetloose-Theme
 **/

$_date     = new DateTime( get_the_date() );
$excerpt   = get_field( 'excerpt' );
$post_date = $_date
    ? typography(
        $_date->format( 'd/m/Y' ) . '<br /> ',
        'small',
        '',
        ''
    )
    : null;
$_content  = get_the_title()
    ? typography(
        ( $post_date ? $post_date : '' ) . get_the_title(),
        'h3',
        '',
        'u-h2 u-uppercase'
    )
    : null;
$_content .= $excerpt['description']
    ? typography(
        $excerpt['description'],
        'p',
        '',
        ''
    )
    : null;
$_content .= get_the_permalink() && $excerpt['button_text']
    ? typography(
        permalink(
            get_the_permalink(),
            '',
            'u-btn',
            $excerpt['button_text'],
            ''
        ),
        'p',
        '',
        ''
    )
    : null;
?>

<article
    data-styles="excerpt"
    class="l-row__col med-width-4"
>
    <?php
    if ( ! empty( $excerpt['image'] ) ) :
        get_template_part(
            'components/figure',
            null,
            array(
                'image'              => $excerpt['image'],
                'styles'             => 'excerpt__image',
                'class_names'        => 'is-cover u-ratio-1x1',
                'animation_duration' => 400,
            )
        );
    endif;
    if ( ! empty( $_content ) ) :
        get_template_part(
            'components/partials-content',
            null,
            array(
                'styles'      => 'excerpt__content',
                'class_names' => 'u-text-align-center',
                'content'     => $_content,
            )
        );
    endif;
    ?>
</article>
