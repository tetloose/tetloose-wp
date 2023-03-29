<?php
/**
 * Partials Header
 *
 * @package Tetloose-Theme
 */

$html_module = new Module( [], [ current_user_can( 'administrator' ) && is_user_logged_in() ? 'is-admin' : 'is-user' ] );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo esc_attr( $html_module->class_names() ); ?>">
<head>
    <?php
        get_template_part( '/inc/components/partials', 'header-meta' );
        get_template_part( '/inc/components/partials', 'header-favicons' );
        get_template_part( '/inc/components/partials', 'header-scripts' );
    ?>
</head>
<body>
    <?php get_template_part( '/inc/components/partials', 'body-scripts' ); ?>
    <?php get_template_part( '/inc/components/header', 'component' ); ?>
