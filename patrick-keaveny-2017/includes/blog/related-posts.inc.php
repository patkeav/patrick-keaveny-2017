<?php 

/*==============================================================================
Related Posts/Products module
	- Get posts related to current post by tags
	- Order posts alphabetically and by publish date (most recent first)
	- Option to get related posts by category (line 30)
==============================================================================*/

global $post;

$current_post = $post->ID; 

if (has_tag()) : 

	// Get related posts by tags

	$tags = array_map(function($t) { return $t->term_id; }, get_the_tags($current_post)); 

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'post__not_in' => array($current_post),
		'tag__in' => $tags,
		'orderby' => array( 'title' => 'ASC', 'post_date' => 'DESC' )
	) ;

	// Get related posts by category 

	/**

	$categories = array_map(function($t) { return $t->term_id; }, get_the_category($current_post)); 

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'post__not_in' => array($current_post),
		'category__in' => $categories
		'orderby' => array( 'title' => 'ASC', 'post_date' => 'DESC' )
	);

	**/ 

	$related_posts = new WP_Query($args);

	if ($related_posts->have_posts()) : 

	?>
		<div class="related related-posts">

			<h4 class="related-title"> <span >Related Posts </span></h4>

			<div class="related-wrap flex flex-wrap three-column">

				<?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>

					<? $image = (get_field('excerpt_image') ? get_field('excerpt_image')['sizes']['blog-list'] : get_bloginfo('template_url') . '/images/placeholder-blog.jpg'); ?>

					<div class="related-single flex-child">

						<div class="related-single-thumbnail">
							<a href="<? the_permalink(); ?>" class="post-grid-single-image-link">
								<img src="<? echo $image; ?>" class="post-grid-image" />
							</a>
						</div>

						<h4 class="related-single-title">
							<a href="<? the_permalink(); ?>">
									<?php the_title(); ?>
							</a>
						</h4>
					</div>

				<?php endwhile; ?>

			</div>

		</div>

	<?php endif; ?>

<?php endif; ?>