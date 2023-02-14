<?php
/**
 * Single column content block
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'singleColumnContentBlock' ) :
    $class_names = new ClassNames(
        [
            'l-container__block is-content',
            get_sub_field( 'backgroundColour' ),
            get_sub_field( 'borderColour' ) ? 'u-hairline-top ' . get_sub_field( 'borderColour' ) : '',
        ],
        [
            get_sub_field( 'fontColour' ),
            'js-click',
        ]
    );
    $content_block = get_sub_field( 'contentBlock' );
    $hide_for_later = get_sub_field( 'hideForLater' );
    if ( ! empty( $content_block ) && ! $hide_for_later ) :
        ?>
        <section
            data-module="SingleColumnContent"
            data-container-classes="<?php echo esc_attr( $class_names->container() ); ?>"
            data-content-classes="<?php echo esc_attr( $class_names->font() ); ?>"
            data-content="<?php echo wp_kses_post( $content_block ); ?>"
            data-animation="fade-in"
            class="u-animate-hide">
        </section>
        <?php
    endif;
endif;
