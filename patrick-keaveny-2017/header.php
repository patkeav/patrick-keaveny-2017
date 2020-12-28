<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
		<meta name="format-detection" content="telephone=no">

		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicon/manifest.json">
		<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon.ico?v=4">
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class( 'page-' . $post->post_name ); ?>>
	<? get_template_part('/includes/_components/color-gradient.inc'); ?>
	<? if (is_front_page()) : ?>
		<div class="loader">
			<div class="loader-inner">
				<? svg(get_stylesheet_directory_uri() . '/images/svg/loader.svg'); ?>
			</div>
		</div>
	<? endif; ?>
	<header class="header">
		<div class="header-brand">
			<h1 class="header-brand-title"><a href="<? bloginfo('url'); ?>">Patrick C. Keaveny</a></h1>
			<h2 class="header-brand-subtitle">The Wordy Coder</h2>
		</div>
		<? get_template_part('/includes/_components/main-nav.inc'); ?>
	</header>
	<div class="container">