<?php
/**
 * Partials - Social
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) && ! empty( $args['socials'] ) ) :
    $component = new Module(
        [
            $args['styles'] ?? '',
        ],
        [
            $args['class_names'] ?? '',
        ]
    );
    ?>
    <div
        data-styles="<?php echo esc_attr( $component->styles() ); ?>"
        class="<?php echo esc_attr( $component->class_names() ); ?>"
    >
        <?php
        foreach ( $args['socials'] as $social ) :
            $link_component = new Module(
                [
                    $args['link_styles'] ?? '',
                ],
                [
                    $social['icon'] ?? '',
                    $args['link_class_names'] ?? '',
                ]
            );

            get_template_part(
                'components/partials-link',
                null,
                array(
                    'link'             => $social['link'],
                    'styles'           => esc_attr( $link_component->styles() ),
                    'class_names'      => esc_attr( $link_component->class_names() ),
                    'icon'             => '',
                    'icon_class_names' => '',
                )
            );
        endforeach;
        ?>
    </div>
    <?php
endif;
