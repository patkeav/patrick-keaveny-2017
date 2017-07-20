<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>

	<div class="content">

		<div class="content-inner">

			<h2 class="content-title"><?php the_title(); ?></h2>

			<?php the_content(); ?>

		</div>

	</div>

<?php get_footer(); ?>