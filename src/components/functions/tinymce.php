<?php
/**
 *  Tinymce
 *
 * @package Tetloose-Theme
 **/

/**
 *  Add tinymce styles
 **/
add_editor_style( 'assets/css/wordpress.css' );

/**
 *  Remove h1 from styles dropdown
 */
add_filter(
    'tiny_mce_before_init',
    function ( $mce_elements ) {
        $mce_elements['block_formats'] = 'Paragraph=p;H1=h1;H2=h2;H3=h3;h4=h4;h5=h5;h6=h6;';

        return $mce_elements;
    }
);

/**
 *  Second-row list of buttons.
 */
add_filter(
    'mce_buttons_2',
    function ( $mce_editor_buttons ) {
        array_unshift( $mce_editor_buttons, 'styleselect' );

        return $mce_editor_buttons;
    }
);

/**
 *  Add Items to Format.
 */
add_filter(
    'tiny_mce_before_init',
    function ( $mce_before_init ) {
        $mce_formats = array(
            array(
                'title'    => 'Button',
                'selector' => 'a',
                'classes'  => 'u-btn',
            ),
            array(
                'title'    => 'Light Button',
                'selector' => 'a',
                'classes'  => 'u-btn is-light',
            ),
            array(
                'title'    => 'Dark Button',
                'selector' => 'a',
                'classes'  => 'u-btn is-dark',
            ),
            array(
                'title'    => 'Small Text',
                'selector' => 'p',
                'classes'  => 'u-small',
            ),
        );

        $mce_before_init['style_formats'] = wp_json_encode( $mce_formats );

        return $mce_before_init;
    }
);
