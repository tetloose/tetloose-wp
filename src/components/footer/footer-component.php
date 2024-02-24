<?php
/**
 * Footer
 *
 * @package Tetloose-Theme
 */

$footer_bg_borders = get_field( 'footer_bg_borders', 'option' );
$footer_content_styles = get_field( 'footer_content_styles', 'option' );
$footer_selection = get_field( 'footer_selection', 'option' );
$footer_component = new Module(
    [
        'footer',
    ],
    [
        'u-load-hide',
        $footer_bg_borders['background_color'],
        $footer_bg_borders['border_color']
            ? 'u-border-t ' . $footer_bg_borders['border_color']
            : '',
        $footer_content_styles['color'],
        $footer_content_styles['link_color'],
        $footer_content_styles['link_hover_color'],
        $footer_content_styles['link_background_hover_color'],
        $footer_selection['color'],
        $footer_selection['background_color'],
    ]
);
?>

<footer
    style="opacity: 0"
    data-module="Footer"
    data-animation="fade-in"
    data-duration="400"
    data-styles="<?php echo esc_attr( $footer_component->styles() ); ?>"
    class="<?php echo esc_attr( $footer_component->class_names() ); ?>">
    <?php
    get_template_part( '/components/footer', 'social' );
    get_template_part( '/components/footer', 'navigation' );
    get_template_part( '/components/footer', 'content' );
    ?>
</footer>
