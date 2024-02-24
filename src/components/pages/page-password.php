<?php
/**
 * Page - Password
 *
 * @package Tetloose-Theme
 */

$password_protected = get_field( 'password_protected', 'option' );
$validation = isset( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) && $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] != $post->post_password ? true : false;
$bg_borders = get_field( 'password_bg_borders', 'option' );
$content_styles = get_field( 'password_content_styles', 'option' );
$form_styles = get_field( 'password_form_styles', 'option' );
$btn_styles = get_field( 'password_btn_styles', 'option' );
$selection = get_field( 'password_selection', 'option' );

$password_component = new Module(
    [],
    [
        $bg_borders['background_color'],
        $bg_borders['border_color'] ? 'u-border-t ' . $bg_borders['border_color'] : '',
        $content_styles['color'],
        $content_styles['link_color'],
        $content_styles['link_hover_color'],
        $content_styles['link_background_hover_color'],
        $form_styles['color'],
        $form_styles['background_color'],
        $form_styles['border_color'],
        $form_styles['hover_color'],
        $form_styles['background_hover_color'],
        $form_styles['border_hover_color'],
        $form_styles['validation_color'],
        $btn_styles['color'],
        $btn_styles['border_color'],
        $btn_styles['background_color'],
        $btn_styles['hover_color'],
        $btn_styles['border_hover_color'],
        $btn_styles['background_hover_color'],
        $selection['color'],
        $selection['background_color'],
    ]
);
?>
<main class="<?php echo esc_attr( $password_component->class_names() ); ?>">
    <section class="l-row u-vh-fullscreen u-align-middle u-align-center u-spacing-t-sml u-spacing-b-sml">
        <div class="l-row__col is-med-half">
            <?php
            if ( isset( $password_protected['title'] ) ) :
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
