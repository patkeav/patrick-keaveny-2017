<?php get_header(); ?>

<?

	$header_image = (get_field('header_image') ? get_field('header_image')['sizes']['4-2-lg'] : get_bloginfo('template_url') . '/images/placeholder.jpg'); 

?>

	<div class="content page">

		<div class="content-inner">

			<? get_template_part('/includes/_components/breadcrumbs.inc') ; ?>

			<div class="post-single-featured-image">
				<img src="<? echo $header_image; ?>" />
				<h1 class="post-single-title"><?php the_title(); ?></h1>
			</div>

			<div class="wysiwyg"><?php the_content(); ?></div>

		</div>

	</div>

<?php get_footer(); ?>