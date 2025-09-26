<?php
/**
 * Footer Social
 *
 * @package Tetloose-Theme
 */

$footer_social = get_field( 'footer_social', 'option' );

if ( ! empty( $footer_social ) ) {
    get_template_part(
        'components/partials-social',
        null,
        array(
            'styles'           => 'footer__social',
            'class_names'      => '',
            'socials'          => $footer_social,
            'link_styles'      => 'footer__social-link',
            'link_class_names' => '',
        )
    );
}
