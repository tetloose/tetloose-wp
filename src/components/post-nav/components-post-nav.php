<?php
/**
 * Post Nav
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() === 'post_nav' ) :
    $spacing   = get_sub_field( 'spacing' );
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    if ( ! empty( $prev_post ) || ! empty( $next_post ) ) :
        $section = new Module(
            [],
            [
                $spacing['top'] ?? '',
                $spacing['bottom'] ?? '',
            ]
        );
        $row     = new Module(
            [
                'post-nav',
            ],
            [
                'u-load-hide',
            ],
            [
                'opacity: 0;',
            ]
        );
        ?>
        <section class="<?php echo esc_attr( $section->class_names() ); ?>">
            <div
                style="<?php echo esc_attr( $row->inline_styles() ); ?>"
                data-module="PostNav"
                data-animation="fade-in"
                data-duration="400"
                data-styles="<?php echo esc_attr( $row->styles() ); ?>"
                class="<?php echo esc_attr( $row->class_names() ); ?>"
            >
                <div class="l-row__col">
                    <nav data-styles="post-nav__nav">
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
