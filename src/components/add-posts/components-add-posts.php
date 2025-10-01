<?php
/**
 * Add Posts
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() === 'add_posts' ) :
    $_posts  = get_sub_field( 'posts' );
    $spacing = get_sub_field( 'spacing' );
    $section = new Module(
        [],
        [
            $spacing['top'] ?? '',
            $spacing['bottom'] ?? '',
        ]
    );
    $row     = new Module(
        [
            'add-posts',
        ],
        [
            'u-load-hide',
            'l-row full-width',
        ],
        [
            'opacity: 0;',
        ]
    );
    ?>
    <section class="<?php echo esc_attr( $section->class_names() ); ?>">
        <div
            style="<?php echo esc_attr( $row->inline_styles() ); ?>"
            data-module="AddPosts"
            data-animation="fade-in"
            data-duration="400"
            data-styles="<?php echo esc_attr( $row->styles() ); ?>"
            class="<?php echo esc_attr( $row->class_names() ); ?>"
        >
            <?php
            if ( is_archive() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( '/components/add-posts', 'excerpt' );
                endwhile;
                get_template_part( '/components/add-posts', 'pagination' );
            elseif ( ! empty( $_posts ) ) :
                // phpcs:disable
                foreach ( $_posts as $post ) :
                    setup_postdata( $post );

                    get_template_part( '/components/add-posts', 'excerpt' );
                endforeach;
                // phpcs:enable
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
    <?php
endif;
