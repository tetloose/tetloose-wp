<?php
/**
 * Partials - Social
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $social_component = new Module(
        [
            $args['styles'],
        ],
        [
            $args['class_names'],
        ]
    );
    if ( ! empty( $args['socials'] ) ) :
        ?>
        <div
            data-styles="<?php echo esc_attr( $social_component->styles() ); ?>"
            class="<?php echo esc_attr( $social_component->class_names() ); ?>">
            <?php
            foreach ( $args['socials'] as $social ) :
                $link_component = new Module(
                    [
                        $args['link_styles'],
                    ],
                    [
                        $social['icon'],
                        $args['link_class_names'],
                    ]
                );

                get_template_part(
                    'components/partials-link',
                    null,
                    array(
                        'link' => $social['link'],
                        'styles' => esc_attr( $link_component->styles() ),
                        'class_names' => esc_attr( $link_component->class_names() ),
                    )
                );
            endforeach;
            ?>
        </div>
        <?php
    endif;
endif;
