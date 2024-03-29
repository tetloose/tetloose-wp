<?php
/**
 * Wrapper - Header
 *
 * @package Tetloose-Theme
 */

$global_selection = get_field( 'global_selection', 'option' );
$html_component = new Module(
    [],
    [
        current_user_can( 'administrator' ) && is_user_logged_in()
            ? 'is-admin'
            : 'is-user',
        $global_selection['color'],
        $global_selection['background_color'],
    ]
);
?>
<!DOCTYPE html>
<html
    <?php language_attributes(); ?>
    class="<?php echo esc_attr( $html_component->class_names() ); ?>">
<head>
    <?php
        get_template_part( '/components/wrapper', 'header-meta' );
        get_template_part( '/components/wrapper', 'header-favicon' );
        get_template_part( '/components/wrapper', 'header-scripts' );
    ?>
</head>
<body>
    <?php get_template_part( '/components/wrapper', 'body-scripts' ); ?>
    <?php get_template_part( '/components/header', 'component' ); ?>
