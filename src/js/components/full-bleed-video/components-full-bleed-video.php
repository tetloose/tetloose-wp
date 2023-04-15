<?php
/**
 * Full Bleed Video
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'full_bleed_video' ) :
    $bg_borders = get_sub_field( 'bg_borders' );
    $content_editor = get_sub_field( 'content_editor' );
    $video_component = new Module(
        [],
        [
            'u-animate-hide',
            $bg_borders['background_color'],
            $bg_borders['border_color'] ? 'u-border-t ' . $bg_borders['border_color'] : '',
        ]
    );
    ?>
    <section
        data-module="FullBleedVideo"
        data-animation="fade-in"
        class="<?php echo esc_attr( $video_component->class_names() ); ?>">
        <div
            class="js-videoIframe"
            data-video="<?php echo esc_attr( $content_editor ); ?>"
            data-size="ratio-16x9"
            data-animation="fade-in"></div>
    </section>
    <?php
endif;
