<?php
/*==============================================================================
Breadcrumbs component
	- Calls the Yoast breadcrumbs
==============================================================================*/

if ( function_exists('yoast_breadcrumb') ) { 
	yoast_breadcrumb('
		<div class="yoast-breadcrumbs">','</div>
	');
}

?>