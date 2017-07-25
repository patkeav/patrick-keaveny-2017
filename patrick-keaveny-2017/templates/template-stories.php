<?php /* Template Name: Stories Template */ ?>

<? 

	$args = array(
		'post_type' => 'story',
		'posts_per_page' => -1,
	);

	$stories = new WP_Query($args);

	$header_image = (get_field('header_image') ? get_field('header_image')['sizes']['4-2-lg'] : get_bloginfo('template_url') . '/images/placeholder.jpg'); 


?>

<?php get_header(); ?>

	<div class="content">

		<div class="content-inner ">

			<? get_template_part('/includes/_components/breadcrumbs.inc') ; ?>

			<div class="post-single-featured-image">
				<img src="<? echo $header_image; ?>" />
				<h1 class="post-single-title"><?php the_title(); ?></h1>
			</div>
			<div class="post-single-meta ">
				<div class="post-single-meta-inner flex justify-space-between">
					<div class="post-date"><? the_date('D, M j, Y');  ?></div>
				</div>
			</div>

			<? if ($stories->have_posts()) : ?>

				<div class="post-grid flex flex-wrap two-column">

					<? while ($stories->have_posts()) : $stories->the_post(); ?>

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