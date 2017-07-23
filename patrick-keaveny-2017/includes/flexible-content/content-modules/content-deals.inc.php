
<?php 

/*==============================================================================
Flexible Content - Deals module
	- Adds a Deals section to the page
	- Deals will display in a grid format
==============================================================================*/

$deals = get_sub_field('deals');

?>

<?php if ($deals) : ?>

	<div class="content-deals flex flex-grid two-column">

		<?php foreach ($deals as $d) : ?>

		<?php
			$deal_headline = $d['d_headline'];
			$deal_text = $d['d_text'];
		?>

			<div class="content-deals-single flex flex-child">
				
				<div class="content-deals-inner flex">
					
					<div class="content-deals-info">
						
						<h4 class="content-deals-info-headline"><?php echo $deal_headline; ?></h4>
							
						<?php echo wpautop($deal_text); ?>

						<a href="<?php echo bloginfo('url'); ?>/shop" class="content-deals-button button">Shop</a>

					</div>

				</div>

			</div>


		<?php endforeach; ?>

	</div>

<?php endif; ?>