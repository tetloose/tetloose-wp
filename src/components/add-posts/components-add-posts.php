<?php
/**
 * Add Posts
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() === 'add_posts' ) :
    $_posts               = get_sub_field( 'posts' );
    $_title               = get_sub_field( 'title' );
    $spacing              = get_sub_field( 'spacing' );
    $pagination_spacing   = get_sub_field( 'pagination_spacing' );
    $posts_component      = new Module(
        [
            'add-posts',
        ],
        [
            'u-load-hide',
            $spacing['top'] ?? '',
            $spacing['bottom'] ?? '',
            'l-row',
            'full-width',
        ]
    );
    $pagination_component = new Module(
        [
            'pagination',
        ],
        [
            $pagination_spacing['top'] ?? '',
            $pagination_spacing['bottom'] ?? '',
        ]
    );
    ?>
    <section
        style="opacity: 0"
        data-module="AddPosts"
        data-animation="fade-in"
        data-duration="400"
        data-styles="<?php echo esc_attr( $posts_component->styles() ); ?>"
        class="<?php echo esc_attr( $posts_component->class_names() ); ?>">
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
    </section>
    <?php
endif;
