<?php get_header(); ?>

<? 
	$ID = get_queried_object()->term_id; 

	$feature_image = get_field('custom_category_image', 'category_' . $ID); ; 

?>

	<div class="content">

		<div class="content-inner">

			<div class="category-feature"><img src="<? echo $feature_image['sizes']['4-1-lg']; ?>" /></div>

			<? get_template_part('/includes/_components/breadcrumbs.inc') ; ?>

			<h2 class="content-title"><?php single_cat_title(); ?></h2>

			<? if (have_posts()) : ?>

				<div class="post-grid flex flex-wrap two-column">

					<? while (have_posts()) : the_post(); ?>

						<? 
							$c = get_the_category();
							$c_titles = array_map(function($t) { return $t->cat_name; }, $c); 
							$c_desc = array_map(function($t) { return $t->category_description; }, $c);
							$categories = get_categories();
							$excerpt = get_field('excerpt_text');
							$image = (get_field('excerpt_image') ? get_field('excerpt_image')['sizes']['blog-list'] : get_bloginfo('template_url') . '/images/placeholder-blog.jpg');
						?>

						<div class="post-grid-single flex flex-child">

							<div class="post-grid-single-wrap"> 

								<a href="<? the_permalink(); ?>" class="post-grid-single-image-link">
									<img src="<? echo $image; ?>" class="post-grid-image" />
								</a>

								<h3 class="post-grid-single-title">
									<a href="<? the_permalink(); ?>"><? the_title(); ?></a>
								</h3>

								<div class="post-date"><? the_date('D, M j, Y'); ?></div> 

								<div class="post-categories"><?php foreach ($c_titles as $key => $value) : echo ((int)$key != count($c_titles) - 1 ? ((int)$key != count($c_titles) - 1 ? $value . ' | ' : $value ) : $value); endforeach; ?></div>

								<div class="post-grid-single-excerpt wysiwyg"><p><? echo ($excerpt ? $excerpt : get_the_excerpt()); ?></p></div>

								<a href="<? the_permalink(); ?>" class="button read-more">Read More</a>

							</div>

						</div>

					<? endwhile; ?>

				</div>

			<? endif; ?>

		</div>

	</div>

<?php get_footer(); ?>