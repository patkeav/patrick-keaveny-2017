<?

/*==============================================================================
Footer Social Component
	- Provides the HTML header nav
==============================================================================*/

$args = array(
	'container_class' => 'footer-nav-wrapper',
	'link_before' => '<span>',
	'link_after' => '</span>',
	'menu' => 'Footer Social',
);

?>

<nav class="footer-nav footer-nav-social" >
	<? wp_nav_menu($args); ?>
</nav>
