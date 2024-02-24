<?php
/**
 * Page - No Posts
 *
 * @package Tetloose-Theme
 */

$content_editor = get_field( 'no_posts_content_editor', 'option' );
$bg_borders = get_field( 'no_posts_bg_borders', 'option' );
$content_styles = get_field( 'no_posts_content_styles', 'option' );
$btn_styles = get_field( 'no_posts_btn_styles', 'option' );
$selection = get_field( 'no_posts_selection', 'option' );

$no_posts_component = new Module(
    [],
    [
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
        $selection['color'],
        $selection['background_color'],
    ]
);
if ( ! empty( $content_editor ) ) :
    ?>
    <main class="<?php echo esc_attr( $no_posts_component->class_names() ); ?>">
        <section class="l-row u-vh-fullscreen u-align-middle u-align-center u-spacing-t-lrg u-spacing-b-lrg">
            <div class="l-row__col is-med-2-third">
            <?php
                get_template_part(
                    'components/partials-content',
                    null,
                    array(
                        'styles' => '',
                        'class_names' => '',
                        'content' => $content_editor,
                    )
                );
            ?>
            </div>
        </section>
    </main>
    <?php
endif;
