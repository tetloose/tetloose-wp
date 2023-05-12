<?php
/**
 * Partials - Logo
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    if ( ! empty( $args['mobile_width'] ) && ! empty( $args['desktop_width'] ) ) {
        echo '
            <style type="text/css">
                @media only screen and (max-width: 767px) {
                    .logo {
                        max-width: ' . wp_kses_post( $args['mobile_width'] ) / 16 . 'rem;
                    }
                }

                @media only screen and (min-width: 768px) {
                    .logo {
                        max-width: ' . wp_kses_post( $args['desktop_width'] ) / 16 . 'rem;
                    }
                }
            </style>
        ';
    }

    if ( ! empty( $args['href'] ) ) {
        $el = 'a';
    } else {
        $el = 'div';
    }

    $logo_component = new Module(
        [
            $args['styles'],
        ],
        [
            $args['class_names'],
        ]
    );
    ?>
        <<?php echo esc_attr( $el ); ?>
            data-styles="<?php echo esc_attr( $logo_component->styles() ); ?>"
            class="<?php echo esc_attr( $logo_component->class_names() ); ?>"
            data-animation="<?php echo esc_attr( $args['animation'] ); ?>"
            <?php if ( ! empty( $args['href'] ) ) : ?>
                href="<?php echo esc_url( $args['href'] ); ?>"
            <?php endif; ?>
            <?php if ( ! empty( $el ) && $el === 'div' ) : ?>
                tab-index="0"
            <?php endif; ?>>
            <?php
            get_template_part(
                'components/partials-figure',
                null,
                array(
                    'image' => $args['image'],
                    'styles' => esc_attr( $args['figure_styles'] ),
                    'class_names' => esc_attr( $args['figure_class_names'] ),
                    'animation' => esc_attr( $args['animation'] ),
                    'animation_duration' => esc_attr( $args['animation_duration'] ),
                    'rest' => esc_attr( $args['rest'] ),
                )
            );
            ?>
        </<?php echo esc_attr( $el ); ?>>
    <?php
endif;
