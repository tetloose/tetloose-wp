<?php
/**
 * Page - Password
 *
 * @package Tetloose-Theme
 */

$password_protected = get_field( 'password_protected', 'option' );
$validation         = isset( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) && post_password_required( $post );
?>
<main class="l-row u-height-fullscreen align-center justify-center u-spacing-t-xxlrg u-spacing-b-xxlrg">
    <section class="l-row__col width-6">
        <form
            action="<?php echo esc_url( home_url( '/' ) ) . esc_sql( $password_protected['action'] ); ?>"
            method="post"
            class="u-form u-spacing-t-sml"
        >
            <input type="hidden" name="redirect_to" value="<?php echo esc_url( get_permalink() ); ?>">
            <label for="password-protected"><?php echo esc_attr( $password_protected['title'] ?? 'Password' ); ?></label>
            <input
                name="post_password"
                id="password-protected"
                type="password"
                autocomplete="off"
                value=""
                placeholder="<?php echo esc_attr( $password_protected['placeholder'] ); ?>"
                <?php if ( $validation ) : ?>
                    class="has-error"
                <?php endif; ?>
            >
            <?php if ( $validation ) : ?>
                <label for='password-protected'><?php echo esc_attr( $password_protected['error_message'] ); ?></label>
            <?php endif; ?>
            <div class="l-row justify-flex-end">
                <div class="l-row__col width-auto">
                    <input type="submit" value="<?php echo esc_attr( $password_protected['submit'] ); ?>">
                </div>
            </div>
        </form>
    </section>
</main>
