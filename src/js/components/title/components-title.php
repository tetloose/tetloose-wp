<?php
/**
 * Content
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'title' ) :
    $post_title = is_archive() ? bold_last_string( titleizeit( get_post_type() ) ) : bold_last_string( get_the_title() );
    $content = get_sub_field( 'use_post_title' ) ? '<h2>' . esc_sql( $post_title ) . '</h2>' : '<h2>' . bold_last_string( get_sub_field( 'title' ) ) . '</h2>';
    $content .= get_sub_field( 'sub_title' ) ? '<p data-styles="sub-title">' . get_sub_field( 'sub_title' ) . '</p>' : '';
    $text_alignment = get_sub_field( 'text_alignment' );
    $spacing = get_sub_field( 'spacing' );
    $bg_borders = get_sub_field( 'bg_borders' );
    $content_styles = get_sub_field( 'content_styles' );
    $title_component = new Module(
        [],
        [
            'u-animate-hide',
            $spacing['top'],
            $spacing['bottom'],
            $bg_borders['background_color'],
            $bg_borders['border_color'] ? 'u-border-t ' . $bg_borders['border_color'] : '',
            $content_styles['color'],
            $content_styles['link_color'],
            $content_styles['link_hover_color'],
            $content_styles['link_background_hover_color'],
        ]
    );
    $content_component = new Module(
        [],
        [
            $text_alignment,
        ]
    );

    ?>
    <section
        data-module="Title"
        data-animation="fade-in"
        data-styles="<?php echo esc_attr( $title_component->styles() ); ?>"
        class="<?php echo esc_attr( $title_component->class_names() ); ?>">
        <?php if ( ! empty( $content ) ) : ?>
            <div class="l-row">
                <div class="l-row__col">
                    <?php
                        $content_obj = (object) [
                            'styles' => esc_attr( $content_component->styles() ),
                            'class_names' => esc_attr( $content_component->class_names() ),
                            'content' => $content,
                        ];
                        include( locate_template( '/components/partials-content.php' ) );
                        ?>
                </div>
            </div>
        <?php endif; ?>
    </section>
    <?php
endif;
