<?php get_header(); ?>

<?

	$c = get_the_category();
	$c_titles = array_map(function($t) { return $t->cat_name; }, $c); 
	$c_desc = array_map(function($t) { return $t->category_description; }, $c);
	$categories = get_categories();

?>

	<div class="content post-single">

		<div class="content-inner">

			<? get_template_part('/includes/_components/breadcrumbs.inc') ; ?>

			<? if (has_post_thumbnail()) : ?>

				<div class="post-single-featured-image">
					<? the_post_thumbnail('4-2-lg'); ?>
					<h1 class="post-single-title"><?php the_title(); ?></h1>
				</div>
				<div class="post-single-meta ">
					<div class="post-single-meta-inner flex justify-space-between">
						<div class="post-date"><? the_date('D, M j, Y');  ?></div>
						<div class="post-categories"><?php foreach ($c_titles as $key => $value) : echo ((int)$key != count($c_titles) - 1 ? ((int)$key != count($c_titles) - 1 ? $value . ' | ' : $value ) : $value); endforeach; ?></div>
					</div>
				</div>

			<? else : ?>

				<div class="post-single-title-wrap no-image">
					<h1 class="post-single-title"><?php the_title(); ?></h1>
				</div>
				<div class="post-single-meta no-image">
				<div class="post-single-meta-inner flex justify-space-between">
					<div class="post-date"><? the_date('D, M j, Y');  ?></div>
					<div class="post-categories"><?php foreach ($c_titles as $key => $value) : echo ((int)$key != count($c_titles) - 1 ? ((int)$key != count($c_titles) - 1 ? $value . ' | ' : $value ) : $value); endforeach; ?></div>
				</div>
			</div>

			<? endif; ?>


			<div class="post-single-content wysiwyg">

				<?php the_content(); ?>

				<?php get_template_part('/includes/flexible-content/main.inc'); ?>

			</div>

			<? get_template_part('/includes/blog/related-posts.inc'); ?>

		</div>

	</div>

<?php get_footer(); ?>