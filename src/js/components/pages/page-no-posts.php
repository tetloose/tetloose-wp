<?php
/**
 * Page - No Posts
 *
 * @package Tetloose-Theme
 */

$no_posts = get_field( 'no_posts', 'option' );
$no_posts_styles = get_field( 'no_posts_styles', 'option' );
$no_posts_component = new Module(
    [],
    [
        $no_posts_styles['bg_borders']['background_color'],
        $no_posts_styles['bg_borders']['border_color'] ? 'u-border-t ' . $no_posts_styles['bg_borders']['border_color'] : '',
        $no_posts_styles['content_styles']['color'],
        $no_posts_styles['content_styles']['link_color'],
        $no_posts_styles['content_styles']['link_hover_color'],
        $no_posts_styles['content_styles']['link_background_hover_color'],
        $no_posts_styles['btn_styles']['color'],
        $no_posts_styles['btn_styles']['border_color'],
        $no_posts_styles['btn_styles']['background_color'],
        $no_posts_styles['btn_styles']['hover_color'],
        $no_posts_styles['btn_styles']['border_hover_color'],
        $no_posts_styles['btn_styles']['background_hover_color'],
    ]
);

?>
<main class="<?php echo esc_attr( $no_posts_component->class_names() ); ?>">
    <section class="l-row u-vh-fullscreen u-align-middle u-align-center u-spacing-t-sml u-spacing-b-sml">
        <div class="l-row__col is-med-2-third">
            <?php if ( ! empty( $no_posts ) ) : ?>
                <?php
                $content_obj = (object) [
                    'styles' => '',
                    'class_names' => '',
                    'content' => $no_posts,
                ];
                include( locate_template( '/inc/components/partials-content.php' ) );
                ?>
            <?php endif; ?>
        </div>
    </section>
</main>
