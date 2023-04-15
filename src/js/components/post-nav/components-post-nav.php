<?php
/**
 * Add Posts
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'post_nav' ) :
    $_title = get_sub_field( 'title' );
    $spacing = get_sub_field( 'spacing' );
    $bg_borders = get_sub_field( 'bg_borders' );
    $content_styles = get_sub_field( 'content_styles' );
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
            $bg_borders['border_color'] ? 'u-border-t ' . $bg_borders['border_color'] : '',
            $content_styles['color'],
            $content_styles['link_color'],
            $content_styles['link_hover_color'],
            $content_styles['link_background_hover_color'],
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
            data-module="PostNav"
            data-animation="fade-in"
            data-styles="<?php echo esc_attr( $post_component->styles() ); ?>"
            class="<?php echo esc_attr( $post_component->class_names() ); ?>">
            <div class="l-row">
                <div class="l-row__col">
                    <?php
                    if ( ! empty( $_title ) ) :
                        $content_obj = (object) [
                            'styles' => '',
                            'class_names' => 'text-align-center',
                            'content' => '<h3>' . $_title . '</h3>',
                        ];
                        include( locate_template( '/inc/components/partials-content.php' ) );
                    endif;
                    ?>
                    <nav
                        data-styles="<?php echo esc_attr( $nav_component->styles() ); ?>"
                        data-styles="post-nav__nav-link"
                        class="<?php echo esc_attr( $nav_component->class_names() ); ?>">
                        <?php
                        if ( ! empty( $prev_post ) ) :
                            $prev_title = strip_tags( str_replace( '"', '', $prev_post->post_title ) );
                            ?>
                            <a
                                data-styles="post-nav__nav-link"
                                class="u-icon-prev"
                                href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"
                                title="<?php echo $prev_title ? esc_html( $prev_title ) : ''; ?>">
                            </a>
                            <?php
                        endif;
                        ?>
                        <a
                            data-styles="post-nav__nav-link"
                            class="u-icon-news"
                            href="/<?php echo esc_url( get_post_type() ); ?>"
                            title="<?php echo esc_attr( ucwords( get_post_type() ) ); ?>">
                        </a>
                        <?php
                        if ( ! empty( $next_post ) ) :
                            $next_title = strip_tags( str_replace( '"', '', $next_post->post_title ) );
                            ?>
                            <a
                                data-styles="post-nav__nav-link"
                                class="u-icon-next"
                                href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"
                                title="<?php echo $next_title ? esc_html( $next_title ) : ''; ?>">
                            </a>
                            <?php
                        endif;
                        ?>
                    </nav>
                </div>
            </div>
        </section>
        <?php
    endif;
endif;
