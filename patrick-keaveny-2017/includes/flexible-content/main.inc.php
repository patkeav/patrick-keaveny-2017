
<?php 

/*==============================================================================
Flexible Content - Main module
	- Reads flexible content module and includes relevant HTML
==============================================================================*/

if (have_rows('content_modules')) :

	while (have_rows('content_modules')) : the_row();

		$module = str_replace('_', '', get_row_layout()) . '.inc';

		get_template_part( 'includes/flexible-content/content-modules/content', $module );

	endwhile; 

endif;