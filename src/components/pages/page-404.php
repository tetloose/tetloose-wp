<?php
/**
 * Page - 404
 *
 * @package Tetloose-Theme
 */

$content_editor = get_field( 'error_content_editor', 'option' );

if ( ! empty( $content_editor ) ) :
    ?>
    <main class="l-row u-height-fullscreen align-center justify-center u-spacing-t-xxlrg u-spacing-b-xxlrg">
        <section class="l-row__col med-width-8">
            <?php
            get_template_part(
                'components/partials-content',
                null,
                array(
                    'styles'      => '',
                    'class_names' => '',
                    'content'     => $content_editor,
                )
            );
            ?>
        </section>
    </main>
    <?php
endif;
