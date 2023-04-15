<?php
/**
 * Hero
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'hero' ) :
    $image = get_sub_field( 'image' );
    $post_type_title = is_archive() ? ucwords( get_post_type() ) : get_the_title();
    $image_styles = get_sub_field( 'image_styles' );
    $title_styles = get_sub_field( 'title_styles' );
    $alignment = get_sub_field( 'alignment' );
    $spacing = get_sub_field( 'spacing' );
    $bg_borders = get_sub_field( 'bg_borders' );
    $content_styles = get_sub_field( 'content_styles' );
    $btn_styles = get_sub_field( 'btn_styles' );
    $text_alignment = get_sub_field( 'text_alignment' );
    $hero_component = new Module(
        [
            'hero',
        ],
        [
            'u-animate-hide',
            $bg_borders['background_color'],
            $bg_borders['border_color'] ? 'u-border-t ' . $bg_borders['border_color'] : '',
        ]
    );
    $image_component = new Module(
        [
            'hero__image',
        ],
        [
            $image_styles['image_gradiant'],
            $image_styles['image_size'],
            $image_styles['image_alignment'],
        ]
    );
    $row_component = new Module(
        [
            'hero__row',
        ],
        [
            'l-row',
            $spacing['top'],
            $spacing['bottom'],
            $alignment['height'],
            $alignment['vertical'],
            $alignment['horizontal'],
        ]
    );
    $title_component = new Module(
        [
            'hero__title',
        ],
        [
            $title_styles['color'],
            $title_styles['background_color'],
        ]
    );
    $post_title = '<span data-styles="' . esc_attr( $title_component->styles() ) . '" class="' . esc_attr( $title_component->class_names() ) . '"><h1>' . esc_attr( $post_type_title ) . '</h1></span>';

    $content_component = new Module(
        [
            'hero__content',
        ],
        [
            $content_styles['link_color'],
            $content_styles['link_hover_color'],
            $content_styles['link_background_hover_color'],
            $btn_styles['color'],
            $btn_styles['border_color'],
            $btn_styles['background_color'],
            $btn_styles['hover_color'],
            $btn_styles['border_hover_color'],
            $btn_styles['background_hover_color'],
            $text_alignment,
        ]
    );
    $content = $post_title ? $post_title : '';
    $content .= get_sub_field( 'content_editor' ) ? get_sub_field( 'content_editor' ) : '';
    ?>
    <section
        data-module="Hero"
        data-animation="fade-in"
        data-styles="<?php echo esc_attr( $hero_component->styles() ); ?>"
        class="<?php echo esc_attr( $hero_component->class_names() ); ?>">
        <?php
        if ( ! empty( $image ) ) :
            $image_obj = (object) [
                'image' => $image,
                'styles' => esc_attr( $image_component->styles() ),
                'class_names' => esc_attr( $image_component->class_names() ),
                'animation' => 'fade-in',
                'animation_duration' => 200,
            ];
            include( locate_template( '/inc/components/partials-figure.php' ) );
        endif;
        if ( ! empty( $content ) ) :
            ?>
            <div
                data-styles="<?php echo esc_attr( $row_component->styles() ); ?>"
                class="<?php echo esc_attr( $row_component->class_names() ); ?>">
                <div class="l-row__col">
                    <?php
                    $content_obj = (object) [
                        'styles' => esc_attr( $content_component->styles() ),
                        'class_names' => esc_attr( $content_component->class_names() ),
                        'content' => $content,
                    ];
                    include( locate_template( '/inc/components/partials-content.php' ) );
                    ?>
                </div>
            </div>
            <?php
        endif;
        ?>
    </section>
    <?php
endif;
