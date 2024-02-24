<?php
/**
 * Archive - Landing
 *
 * @package Tetloose-Theme
 */

get_header();
if ( have_posts() ) {
    $spacing = get_field( get_post_type() . '_spacing', 'option' );
    $background_color = get_field( get_post_type() . '_background_color', 'option' );
    $page_component = new Module(
        [],
        [
            $spacing['top'],
            $spacing['bottom'],
            $background_color,
        ]
    );
    ?>
    <main class="<?php echo esc_attr( $page_component->class_names() ); ?>">
        <?php get_template_part( '/components/component', 'loader' ); ?>
    </main>
    <?php
} else {
    get_template_part( '/components/page', 'no-posts' );
}
get_footer();
