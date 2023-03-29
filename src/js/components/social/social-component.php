<?php
/**
 * Social
 *
 * @package Tetloose-Theme
 */

$social_component = new Module(
    [
        'social',
        $social->styles,
    ],
    [
        $social->class_names,
    ]
);
if ( have_rows( 'social', 'option' ) ) :
    ?>
    <div
        data-module="Social"
        data-styles="<?php echo esc_attr( $social_component->styles() ); ?>"
        class="<?php echo esc_attr( $social_component->class_names() ); ?>">
        <?php
        while ( have_rows( 'social', 'option' ) ) :
            the_row();
            $_link = (object) [
                'link' => get_sub_field( 'link' ),
                'styles' => 'social__link',
                'class_names' => get_sub_field( 'icon' ),
            ];
            include( locate_template( '/inc/components/partials-link.php' ) );
         endwhile;
        ?>
    </div>
    <?php
endif; ?>
