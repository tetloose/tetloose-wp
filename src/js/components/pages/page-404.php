<?php
/**
 * Page - 404
 *
 * @package Tetloose-Theme
 */

$error_page = get_field( 'error_page', 'option' );
$error_styles = get_field( 'error_styles', 'option' );
$error_page_component = new Module(
    [],
    [
        $error_styles['bg_borders']['background_color'],
        $error_styles['bg_borders']['border_color'] ? 'u-border-t ' . $error_styles['bg_borders']['border_color'] : '',
        $error_styles['content_styles']['color'],
        $error_styles['content_styles']['link_color'],
        $error_styles['content_styles']['link_hover_color'],
        $error_styles['content_styles']['link_background_hover_color'],
        $error_styles['btn_styles']['color'],
        $error_styles['btn_styles']['border_color'],
        $error_styles['btn_styles']['background_color'],
        $error_styles['btn_styles']['hover_color'],
        $error_styles['btn_styles']['border_hover_color'],
        $error_styles['btn_styles']['background_hover_color'],
    ]
);
?>
<main class="<?php echo esc_attr( $error_page_component->class_names() ); ?>">
    <section class="l-row u-vh-fullscreen u-align-middle u-align-center u-spacing-t-sml u-spacing-b-sml">
        <div class="l-row__col is-med-2-third">
            <?php if ( ! empty( $error_page ) ) : ?>
                <?php
                $content_obj = (object) [
                    'styles' => '',
                    'class_names' => '',
                    'content' => $error_page,
                ];
                include( locate_template( '/inc/components/partials-content.php' ) );
                ?>
            <?php endif; ?>
        </div>
    </section>
</main>
