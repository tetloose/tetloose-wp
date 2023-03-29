<?php
/**
 * Content
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'title' ) :
    $section_title = get_sub_field( 'use_post_title' ) ? '<h2>' . get_the_title() . '</h2>' : '<h2>' . get_sub_field( 'title' ) . '</h2>';
    $sub_title = get_sub_field( 'sub_title' ) ? '<p data-styles="sub-title">' . get_sub_field( 'sub_title' ) . '</p>' : '';
    $text_alignment = get_sub_field( 'text_alignment' );
    $post_title = get_the_title();
    $spacing = get_sub_field( 'spacing' );
    $bg_borders = get_sub_field( 'bg_borders' );
    $content_styles = get_sub_field( 'content_styles' );
    $title_component = new Module(
        [],
        [
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

    ?>
    <section
        data-module="Title"
        data-animation="fade-in"
        data-styles="<?php echo esc_attr( $title_component->styles() ); ?>"
        class="<?php echo esc_attr( $title_component->class_names() ); ?>">
        <div class="l-row">
            <div class="l-row__col">
                <?php
                    $content = (object) [
                        'styles' => '',
                        'class_names' => $text_alignment ? $text_alignment : '',
                        'content' => $sub_title ? $section_title . $sub_title : $section_title,
                    ];
                    include( locate_template( '/inc/components/partials-content.php' ) );
                    ?>
            </div>
        </div>
    </section>
    <?php
endif;
