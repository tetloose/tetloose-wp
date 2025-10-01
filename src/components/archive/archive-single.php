<?php
/**
 * Archive - Single
 *
 * @package Tetloose-Theme
 */

get_header();
if ( have_posts() ) {
    if ( post_password_required( $post ) ) {
        get_template_part( '/components/page', 'password' );
    } else {
        $spacing = get_field( 'spacing' );
        $main    = new Module(
            [],
            [
                $spacing['top'] ?? '',
                $spacing['bottom'] ?? '',
            ]
        );
        ?>
        <main class="<?php echo esc_attr( $main->class_names() ); ?>">
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
