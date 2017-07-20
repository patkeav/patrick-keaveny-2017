<?

/*==============================================================================
Footer Categories Component
	- Provides the HTML footer category nav
==============================================================================*/

$args = array(
	'container_class' => 'footer-nav-wrapper',
	'link_before' => '<span>',
	'link_after' => '</span>',
	'menu' => 'Footer Categories',
);

?>

<nav class="footer-nav footer-nav-categories" >
	<? wp_nav_menu($args); ?>
</nav>
