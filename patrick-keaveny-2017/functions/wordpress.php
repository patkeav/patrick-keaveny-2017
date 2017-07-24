<?

add_action('wp_enqueue_scripts', 'addThemeSources');

function addThemeSources() {
	wp_enqueue_script( 'https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', false );
	wp_enqueue_style( 'main', get_bloginfo('template_url') . '/css/main.min.css', false );
	wp_enqueue_script( 'main', get_bloginfo('template_url') . '/js/main.min.js', false );
	

}

