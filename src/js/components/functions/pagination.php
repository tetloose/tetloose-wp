<?php
 /**
  *  Pagination
  *
  * @package Tetloose-Theme
  **/

 /**
  * Pagination function
  *
  * @param object $pagination_obj value passed is a object.
  * @param string $numpages value passed is a string.
  * @param string $pagerange value passed is a string.
  * @param string $paged value passed is a string.
  **/
function pagination( $pagination_obj, $numpages = '', $pagerange = '', $paged = '' ) {
    global $paged;

    if ( empty( $pagerange ) ) {
        $pagerange = 2;
    }

    if ( empty( $paged ) ) {
        // phpcs:disable
        $paged = 1;
        // phpcs:enable
    }

    if ( $numpages == '' ) {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;

        if ( ! $numpages ) {
            $numpages = 1;
        }
    }

    $pagination_args = array(
        'base'            => get_pagenum_link( 1 ) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => false,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => true,
        'prev_text'       => '<i class="u-icon-first"></i>',
        'next_text'       => '<i class="u-icon-last"></i>',
        'type'            => 'array',
        'add_args'        => false,
        'add_fragment'    => '',
    );

    $paginate_links = paginate_links( $pagination_args );

    if ( is_array( $paginate_links ) ) {
        ?>
        <div
            data-styles="<?php echo esc_attr( $pagination_obj->styles ); ?>"
            class="<?php echo esc_attr( $pagination_obj->class_names ); ?>">
            <div class="l-row">
                <div class="l-row__col">
                    <?php
                    if ( ! empty( $pagination_obj->title ) ) :
                        $content_obj = (object) [
                            'styles' => '',
                            'class_names' => 'text-align-center',
                            'content' => '<h3>' . $pagination_obj->title . '</h3>',
                        ];
                        include( locate_template( '/inc/components/partials-content.php' ) );
                    endif;
                    ?>
                    <nav class="u-spacing-t-sml">
                        <?php
                        foreach ( $paginate_links as $page ) {
                            echo wp_kses_post( $page );
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
        <?php
    }
}

// Next link.
add_filter(
    'next_post_link',
    function( $link ) {
        $next_post = get_next_post();

        if ( ! empty( $next_post ) ) {
            $title = $next_post->post_title;
            $this_id = $next_post->ID;
            $description = get_field( 'description', $this_id );
            $link = str_replace( 'href=', 'title=" ' . $title . ' - ' . $description . '" href=', $link );

            return $link;
        }
    }
);

// Previous link.
add_filter(
    'previous_post_link',
    function( $link ) {
        $previous_post = get_previous_post();

        if ( ! empty( $previous_post ) ) {
            $title = $previous_post->post_title;
            $this_id = $previous_post->ID;
            $description = get_field( 'description', $this_id );
            $link = str_replace( 'href=', 'title=" ' . $title . ' - ' . $description . '" href=', $link );

            return $link;
        }
    }
);
