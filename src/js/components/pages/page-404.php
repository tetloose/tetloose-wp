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
        $error_styles['selection']['color'],
        $error_styles['selection']['background_color'],
    ]
);
if ( ! empty( $error_page ) ) :
    ?>
    <main class="<?php echo esc_attr( $error_page_component->class_names() ); ?>">
        <section class="l-row u-vh-fullscreen u-align-middle u-align-center u-spacing-t-lrg u-spacing-b-lrg">
            <div class="l-row__col is-med-2-third">
                <?php
                get_template_part(
                    'components/partials-content',
                    null,
                    array(
                        'styles' => '',
                        'class_names' => '',
                        'content' => $error_page,
                    )
                );
                ?>
            </div>
        </section>
    </main>
    <?php
endif;
