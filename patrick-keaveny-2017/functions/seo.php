<?

add_filter( 'wpseo_breadcrumb_links', 'wpse_100012_override_yoast_breadcrumb_trail' );

function wpse_100012_override_yoast_breadcrumb_trail( $links ) {
    global $post;

    if ( is_singular( 'story' )  ) {
        $breadcrumb[] = array(
            'url' => get_bloginfo('url') . '/stories',
            'text' => 'Stories',
        );

        array_splice( $links, 1, -2, $breadcrumb );
    }

    return $links;
}