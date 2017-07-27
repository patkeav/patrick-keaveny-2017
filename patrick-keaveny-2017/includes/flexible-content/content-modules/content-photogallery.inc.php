

<?php 

/*==============================================================================
Flexible Content - Photo Gallery module
	- Adds a photo gallery
	- Can specify what column layout you prefer for the gallery grid
==============================================================================*/

$gallery = get_sub_field('gallery');
$columns = str_replace('_', '-', get_sub_field('column_layout'));

global $fc_key;

?>

<?php if ($gallery) : ?>

	<div class="content-gallery flex flex-grid <?php echo $columns; ?>">
		
		<?php foreach ($gallery as $g) : ?>

			<div class="content-gallery-single flex-child">
				<a href="<?php echo $g['url']; ?>" class="venobox vbox-item" data-gall="myGallery_<? echo $fc_key; ?>">
					<img src="<?php echo $g['sizes']['1-1-md']; ?>" alt="<?php echo $g['alt']; ?>" title="<?php echo $g['title']; ?>"  />
				</a>
			</div>


		<?php endforeach; ?>

	</div>

<?php endif; ?>