<?php get_header(); ?>

<? 
	$ID = get_queried_object()->term_id; 

	$feature_image = get_field('custom_category_image', 'category_' . $ID); print_r(get_fields()); 

?>

	<div class="content">

		<div class="content-inner">

			<div class="category-feature"><img src="<? echo $feature_image['sizes']['4-1-lg']; ?>" /></div>

			<? get_template_part('/includes/_components/breadcrumbs.inc') ; ?>

			<h2 class="content-title"><?php single_cat_title(); ?></h2>

			<? if (have_posts()) : ?>

				<div class="post-grid flex flex-wrap two-column">

					<? while (have_posts()) : the_post(); ?>

						<div class="post-grid-single flex-child">

							<a href="<? the_permalink(); ?>">
								<img src="<? bloginfo('template_url'); ?>/images/placeholder.jpg" class="post-grid-image" />
							</a>

							<h3 class="post-grid-single-title">
								<a href="<? the_permalink(); ?>"><? the_title(); ?></a>
							</h3>

							<div class="post-grid-single-date"><? the_date('D, M j, Y'); ?></div> 

							<div class="post-grid-single-excerpt"><? the_field('excerpt_text'); ?></div>

							<a href="<? the_permalink(); ?>" class="button read-more">Read More</a>

						</div>

					<? endwhile; ?>

				</div>

			<? endif; ?>

		</div>

	</div>

<?php get_footer(); ?>