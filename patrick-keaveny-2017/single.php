<?php get_header(); ?>

	<div class="content">

		<div class="content-inner">

			<? get_template_part('/includes/_components/breadcrumbs.inc') ; ?>

			<h2 class="content-title"><?php the_title(); ?></h2>

			<div class="wysiwyg"><?php the_content(); ?></div>

		</div>

	</div>

<?php get_footer(); ?>