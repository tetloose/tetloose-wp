<?php
/**
 * Post Nav
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'post_nav' ) :
    $spacing = get_sub_field( 'spacing' );
    $bg_borders = get_sub_field( 'bg_borders' );
    $content_styles = get_sub_field( 'content_styles' );
    $selection = get_sub_field( 'selection' );
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    $post_component = new Module(
        [
            'post-nav',
        ],
        [
            'u-animate-hide',
            $spacing['top'],
            $spacing['bottom'],
            $bg_borders['background_color'],
            $bg_borders['border_color']
                ? 'u-border-t ' . $bg_borders['border_color']
                : '',
            $content_styles['color'],
            $content_styles['link_color'],
            $content_styles['link_hover_color'],
            $content_styles['link_background_hover_color'],
            $selection['color'],
            $selection['background_color'],
        ]
    );
    $nav_component = new Module(
        [
            'post-nav__nav',
        ],
        [
            'u-spacing-t-sml',
        ]
    );
    if ( ! empty( $prev_post ) || ! empty( $next_post ) ) :
        ?>
        <section
            style="opacity: 0"
            data-module="PostNav"
            data-animation="fade-in"
            data-duration="400"
            data-styles="<?php echo esc_attr( $post_component->styles() ); ?>"
            class="<?php echo esc_attr( $post_component->class_names() ); ?>">
            <div class="l-row">
                <div class="l-row__col">
                    <?php get_template_part( '/components/post-nav', 'content' ); ?>
                    <nav
                        data-styles="<?php echo esc_attr( $nav_component->styles() ); ?>"
                        data-styles="post-nav__nav-link"
                        class="<?php echo esc_attr( $nav_component->class_names() ); ?>">
                        <?php
                        get_template_part( '/components/post-nav', 'prev' );
                        get_template_part( '/components/post-nav', 'back' );
                        get_template_part( '/components/post-nav', 'next' );
                        ?>
                    </nav>
                </div>
            </div>
        </section>
        <?php
    endif;
endif;
