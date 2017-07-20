<?

/*==============================================================================
Header Nav Component
	- Provides the HTML header nav
==============================================================================*/

$args = array(
	'container_class' => 'menu-nav-wrapper',
	'link_before' => '<span>',
	'link_after' => '</span>',
	'menu' => 'Main Navigation',
	'menu_class' => 'flex justify-center',
);

?>

<nav class="main-nav flex align-center" >
	<? wp_nav_menu($args); ?>
</nav>
