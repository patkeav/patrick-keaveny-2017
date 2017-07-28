<?

add_action('wp_enqueue_scripts', 'pck_add_theme_sources');

function pck_add_theme_sources() {
	wp_register_script( 'home-feature', get_stylesheet_directory_uri() . '/js/home-feature.js', false, '3.1', true );
	wp_register_script( 'main-js',  get_stylesheet_directory_uri() . '/js/main.min.js', '1.2', false, true );
	wp_register_script( 'google-analytics',  get_stylesheet_directory_uri() . '/js/analyticstracking.js', '1.0', false, true );

	wp_register_style( 'main-css',  get_stylesheet_directory_uri() . '/css/main.min.css', false, '7.9');
	
	wp_enqueue_style( 'main-css' );
	wp_enqueue_script( 'main-js' );
	wp_enqueue_script( 'google-analytics' );
	
	if (is_front_page()) {
		wp_enqueue_script('home-feature');
	}

}

