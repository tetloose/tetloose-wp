<?php
/**
 * Content
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'content' ) :
    $spacing = get_sub_field( 'spacing' );
    $bg_borders = get_sub_field( 'bg_borders' );
    $content_styles = get_sub_field( 'content_styles' );
    $btn_styles = get_sub_field( 'btn_styles' );
    $count_content_repeater = count( get_sub_field( 'content_repeater' ) ) ? count( get_sub_field( 'content_repeater' ) ) : 1;
    $column_class = '';
    $content_component = new Module(
        [],
        [
            'u-animate-hide',
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
    $column_component = new Module(
        [],
        [
            'l-row__col',
            $spacing['top'],
            $count_content_repeater === 2 ? 'is-lrg-half' : '',
            $count_content_repeater >= 3 ? 'is-lrg-1-third' : '',
        ]
    );
    ?>
    <section
        data-module="Content"
        data-animation="fade-in"
        class="<?php echo esc_attr( $content_component->class_names() ); ?>">
        <div class="l-row">
            <?php
            if ( have_rows( 'content_repeater' ) ) :
                while ( have_rows( 'content_repeater' ) ) :
                    the_row();
                    $content_editor = get_sub_field( 'content_editor' );
                    ?>
                    <div class="<?php echo esc_attr( $column_component->class_names() ); ?>">
                        <?php
                        if ( ! empty( $content_editor ) ) :
                            $content_obj = (object) [
                                'styles' => '',
                                'class_names' => '',
                                'content' => $content_editor,
                            ];
                            include( locate_template( '/components/partials-content.php' ) );
                        endif;
                        ?>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
    <?php
endif;
