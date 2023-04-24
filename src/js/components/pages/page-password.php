<?php
/**
 * Page - Password
 *
 * @package Tetloose-Theme
 */

$password_protected = get_field( 'password_protected', 'option' );
$validation = isset( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) && $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] != $post->post_password ? true : false;
$password_styles = get_field( 'password_styles', 'option' );
$password_component = new Module(
    [],
    [
        $password_styles['bg_borders']['background_color'],
        $password_styles['bg_borders']['border_color'] ? 'u-border-t ' . $password_styles['bg_borders']['border_color'] : '',
        $password_styles['content_styles']['color'],
        $password_styles['content_styles']['link_color'],
        $password_styles['content_styles']['link_hover_color'],
        $password_styles['content_styles']['link_background_hover_color'],
        $password_styles['btn_styles']['color'],
        $password_styles['btn_styles']['border_color'],
        $password_styles['btn_styles']['background_color'],
        $password_styles['btn_styles']['hover_color'],
        $password_styles['btn_styles']['border_hover_color'],
        $password_styles['btn_styles']['background_hover_color'],
        $password_styles['form_styles']['color'],
        $password_styles['form_styles']['background_color'],
        $password_styles['form_styles']['border_color'],
        $password_styles['form_styles']['hover_color'],
        $password_styles['form_styles']['background_hover_color'],
        $password_styles['form_styles']['border_hover_color'],
        $password_styles['form_styles']['validation_color'],
        $password_styles['selection']['color'],
        $password_styles['selection']['background_color'],
    ]
);
?>
<main class="<?php echo esc_attr( $password_component->class_names() ); ?>">
    <section class="l-row u-vh-fullscreen u-align-middle u-align-center u-spacing-t-sml u-spacing-b-sml">
        <div class="l-row__col is-med-half">
            <?php
            if ( ! empty( $password_protected['title'] ) ) :
                get_template_part(
                    'components/partials-content',
                    null,
                    array(
                        'styles' => '',
                        'class_names' => '',
                        'content' => '<h2>' . esc_attr( $password_protected['title'] ) . '</h2>',
                    )
                );
            endif;
            ?>
            <form
                action="<?php echo esc_url( home_url( '/' ) ) . esc_sql( $password_protected['action'] ); ?>"
                method="post"
                class="u-form u-spacing-t-sml">
                <div class="u-form__field">
                    <label for="password-protected"><?php echo esc_attr( $password_protected['label'] ); ?></label>
                    <input
                        name="post_password"
                        id="password-protected"
                        type="password"
                        autocomplete="off"
                        value=""
                        placeholder="<?php echo esc_attr( $password_protected['placeholder'] ); ?>"
                        <?php if ( $validation ) : ?>
                            class="has-error"
                        <?php endif; ?>>
                    <?php if ( $validation ) : ?>
                        <span class="u-form__validation">
                            <?php echo esc_attr( $password_protected['error_message'] ); ?>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="l-action is-align-right">
                    <button class="u-btn" type="submit">
                        <?php echo esc_attr( $password_protected['submit'] ); ?>
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
