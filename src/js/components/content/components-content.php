<?php
/**
 * Content
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'content' ) :
    $content_editor = get_sub_field( 'content_editor' );
    $spacing = get_sub_field( 'spacing' );
    $bg_borders = get_sub_field( 'bg_borders' );
    $content_styles = get_sub_field( 'content_styles' );
    $btn_styles = get_sub_field( 'btn_styles' );
    $content_component = new Module(
        [
            'content',
        ],
        [
            $spacing['top'],
            $spacing['bottom'],
            $bg_borders['background_color'],
            $bg_borders['border_color'] ? 'u-border-t ' . $bg_borders['border_color'] : '',
            $content_styles['color'],
            $content_styles['link_color'],
            $content_styles['link_hover_color'],
            $content_styles['link_background_hover_color'],
            $btn_styles['color'],
            $btn_styles['border_color'],
            $btn_styles['background_color'],
            $btn_styles['hover_color'],
            $btn_styles['border_hover_color'],
            $btn_styles['background_hover_color'],
        ]
    );
    ?>
    <section
        data-module="Content"
        data-animation="fade-in"
        data-styles="<?php echo esc_attr( $content_component->styles() ); ?>"
        class="<?php echo esc_attr( $content_component->class_names() ); ?>">
        <div class="l-row">
            <div class="l-row__col">
                <?php
                if ( ! empty( $content_editor ) ) :
                    $content = (object) [
                        'styles' => '',
                        'class_names' => '',
                        'content' => $content_editor,
                    ];
                    include( locate_template( '/inc/components/partials-content.php' ) );
                endif;
                ?>
            </div>
        </div>
    </section>
    <?php
endif;
