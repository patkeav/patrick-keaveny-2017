<?php /* Template Name: Home Template */ ?>

<? 

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 5,
		'orderby' => 'date',
		'order' => 'DESC',
		'category_name' => 'Blog'
	);

	//$recent_posts = new WP_Query($args);

	$featured_posts = get_field('featured_posts');
	$categories = get_field('home_categories'); 
	$i = 0;

?>

<?php get_header(); ?>

	<div class="content">

		<div class="content-inner ">

			<div class="home-posts flex justify-center">
				<!-- <div id="featured" class="home-post_left">
					<? $post = $featured_posts[0]; setup_postdata($post); ?>
					<? $image = (get_field('excerpt_image') ? get_field('excerpt_image')['sizes']['home-posts'] : get_bloginfo('template_url') . '/images/placeholder-blog.jpg'); ?>
					<a href="<? the_permalink(); ?>" id="<? get_the_ID(); ?>" class="home-post-single" style="background-image: url(<? echo $image; ?>)" >
						<div class="home-post-single-title">
							<h2><? the_title(); ?></h2>
						</div>
					</a>
				</div>
				<? wp_reset_postdata(); ?> -->
				<div class="home-post_wrap">
					<? foreach ($featured_posts as $post) : setup_postdata($post); ?>
								<? $image = (get_field('excerpt_image') ? get_field('excerpt_image')['sizes']['home-posts'] : get_bloginfo('template_url') . '/images/placeholder-blog.jpg'); ?>
								<a href="<? the_permalink(); ?>" id="<? get_the_ID(); ?>" class="home-post-single <? echo ($i == 0 ? 'current' : ''); ?>" style="background-image: url(<? echo $image; ?>)">
									<div class="home-post-single-title">
										<h2> <? the_title(); ?></h2>
									</div>
								</a>
						<? $i++; ?>
					<? endforeach; ?>
					<? wp_reset_postdata(); ?>
				</div>
			</div>

			<div class="home-callout">

				<h2 class="content-title"><?php the_title(); ?></h2>

				<div class="wysiwyg "><?php the_content(); ?></div>

			</div>

			<div class="home-categories-connect flex ">
				<div class="home-categories">
					<h3 class="home-categories-connect-title first"> Categories</h3>
					<div class="home-categories-wrap">
						<? foreach ($categories as $c) : ?>
							<? $image = get_field('custom_category_image', 'category_' . $c->term_id); ?>

							<a href="<? echo bloginfo('url') . '/blog/' . $c->slug; ?>" class="home-category">
								<img src="<? echo $image['sizes']['home-feature']; ?>" alt="<? $image['alt'] ?>" title="<? $image['title']; ?>" class="home-category-image" />
								<div class="home-category-title"><? echo $c->name; ?></div>
									
							</a>
						<? endforeach; ?>
					</div>
				</div>
				<div class="home-connect">
					<h3 class="home-categories-connect-title"> Connect </h3>
					<div class="home-connect-inner">
						<ul class="home-connect-social flex flex-wrap three-column">
							<li class="home-connect-social-item flex-child flex justify-center"><a href="https://www.facebook.com/patrick.keaveny.7" target="_blank"><? svg(get_bloginfo('template_url') . '/images/svg/facebook.svg'); ?></a></li>
							<li class="home-connect-social-item flex-child flex justify-center"><a href="https://twitter.com/PatrickKeaveny" target="_blank"><? svg(get_bloginfo('template_url') . '/images/svg/twitter.svg'); ?></a></li>
							<li class="home-connect-social-item flex-child flex justify-center"><a href="https://www.instagram.com/patkeav412/" target="_blank"><? svg(get_bloginfo('template_url') . '/images/svg/instagram.svg'); ?></a></li>

						</ul>
					</div>
					<div class="home-connect-twitter">
						            <a class="twitter-timeline"  href="https://twitter.com/PatrickKeaveny" data-widget-id="440817173838045185">Tweets by @PatrickKeaveny</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
					</div>
				</div>
			</div>

		</div>

	</div>

<?php get_footer(); ?>