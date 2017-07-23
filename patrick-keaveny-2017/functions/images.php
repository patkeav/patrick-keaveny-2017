<?php

/*==============================================================================
Image Support
==============================================================================*/

if( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

/*==============================================================================
Image Sizes
==============================================================================*/

if( function_exists( 'add_image_size' ) ) {
	add_image_size( '1-1-md', 600, 600, true );
	add_image_size( '4-1-lg', 1200, 300, true );
	add_image_size( '4-2-lg', 1200, 500, true ); 

	add_image_size( 'home-feature', 542, 215, true );
	add_image_size( 'home-posts', 710, 400, true );
}
