<?php /* Template Name: Portfolio Template */ ?>

<? 
	$clients = get_field('clients');

	$header_image = (get_field('header_image') ? get_field('header_image')['sizes']['4-2-lg'] : get_bloginfo('template_url') . '/images/placeholder.jpg'); 


?>

<?php get_header(); ?>

	<div class="content">

		<div class="content-inner ">

			<? get_template_part('/includes/_components/breadcrumbs.inc') ; ?>


			<h1 class="story-title" style="0 0 .9375em 0"><?php the_title(); ?></h1>

			<div class="story-intro wysiwyg">
				<? the_content(); ?>
			</div>

			<div class="post-grid portfolio-grid flex flex-wrap two-column">

				<? foreach ($clients as $client): ?>

					<? 
						$c_name = $client['client_name'];
						$c_link = $client['client_link'];
						$c_desc = $client['client_description'];
						$c_image = ($client['client_screenshot'] ? $client['client_screenshot']['sizes']['1-1-md'] : get_bloginfo('template_url') . '/images/placeholder-blog.jpg');
						$c_responsibilities = $client['responsibilities'];
					?>

					<div class="post-grid-single portfolio-grid-single flex flex-child">

						<div class="post-grid-single-wrap portfolio-grid-single-wrap"> 


							<!-- <h3 class="post-grid-single-title portfolio-grid-title">
								<? //echo $c_name ?>
							</h3> -->

							<div class="portfolio-grid-single-info">

								<img src="<? echo $c_image; ?>" class="portfolio-grid-single-image" />


								<div class="portfolio-grid-single-overlay flex align-center justify-center">

									<div class="portfolio-grid-single-overlay-inner ">

										<div class="portfolio-grid-single-info-desc wysiwyg"><p><? echo $c_desc; ?></p></div>

										<div class="portfolio-grid-single-info-logo flex align-center justify-center">
											<? echo $c_name ?>
										</div>

										<? if ($c_responsibilities) : ?>

											<div class="portfolio-grid-single-info-responsibilities">

												<ul class="responsibilities">
													<? foreach ($c_responsibilities as $responsibility) : ?>

														<li class="responsibility"><? echo $responsibility['responsibility']; ?></li>

													<? endforeach; ?>
												</ul>

												<a href="<? echo $c_link; ?>" class="button read-more" target=_blank>See it live</a>

											</div>


										<? endif; ?>

									</div>

								</div>

							</div>

						</div>

					</div>

				<? endforeach; ?>

			</div>


		</div>

	</div>

<?php get_footer(); ?>