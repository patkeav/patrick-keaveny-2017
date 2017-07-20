<?

/*==============================================================================
Footer Pages Component
	- Provides the HTML footer pages nav
==============================================================================*/

$args = array(
	'container_class' => 'footer-nav-wrapper',
	'link_before' => '<span>',
	'link_after' => '</span>',
	'menu' => 'Footer Pages',
);

?>

<nav class="footer-nav footer-nav-social" >
	<? wp_nav_menu($args); ?>
</nav>
