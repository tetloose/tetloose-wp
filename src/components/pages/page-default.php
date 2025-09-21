<?php
/**
 * Page - Default
 *
 * @package Tetloose-Theme
 */

get_header();
if ( have_posts() ) {
    if ( post_password_required( $post ) ) {
        get_template_part( '/components/page', 'password' );
    } else {
        $spacing          = get_field( 'spacing' );
        $background_color = get_field( 'background_color' );
        $page_component   = new Module(
            [],
            [
                $spacing['top'] ?? '',
                $spacing['bottom'] ?? '',
                $background_color ?? '',
            ]
        );
        ?>
        <main class="<?php echo esc_attr( $page_component->class_names() ); ?>">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( '/components/component', 'loader' );
            endwhile;
            ?>
        </main>
        <?php
    }
} else {
    get_template_part( '/components/page', 'no-posts' );
}
get_footer();
