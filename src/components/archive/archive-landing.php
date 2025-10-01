<?php
/**
 * Archive - Landing
 *
 * @package Tetloose-Theme
 */

get_header();
if ( have_posts() ) {
    $spacing = get_field( get_post_type() . '_spacing', 'option' );
    $main    = new Module(
        [],
        [
            $spacing['top'] ?? '',
            $spacing['bottom'] ?? '',
        ]
    );
    ?>
    <main class="<?php echo esc_attr( $main->class_names() ); ?>">
        <?php get_template_part( '/components/component', 'loader' ); ?>
    </main>
    <?php
} else {
    get_template_part( '/components/page', 'no-posts' );
}
get_footer();
