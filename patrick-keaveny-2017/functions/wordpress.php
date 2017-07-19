<?

add_action('wp_enqueue_scripts', 'addThemeSources');

function addThemeSources() {
	wp_enqueue_style( 'main', get_bloginfo('template_url') . '/css/main.min.css' );
	wp_enqueue_script( 'main', get_bloginfo('template_url') . '/js/main.min.js' );

}

