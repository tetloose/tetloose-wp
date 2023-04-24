<?php
/**
 * Partials - Video
 *
 * @package Tetloose-Theme
 */

if ( ! empty( $args ) ) :
    $video_component = new Module(
        [
            $args['styles'],
        ],
        [
            'js-videoIframe',
            $args['class_names'],
        ]
    );
    ?>
    <div
        data-styles="<?php echo esc_attr( $video_component->styles() ); ?>"
        class="<?php echo esc_attr( $video_component->class_names() ); ?>"
        data-video="<?php echo esc_attr( $args['video'] ); ?>"
        data-size="<?php echo esc_attr( $args['ratio'] ); ?>"
        data-animation="<?php echo esc_attr( $args['animation'] ); ?>"
        data-duration="<?php echo esc_attr( $args['animation_duration'] ); ?>"></div>
    <?php
endif;
