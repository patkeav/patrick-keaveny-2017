
<?php 

/*==============================================================================
Flexible Content - Callout Icons module
	- Adds callout icons
==============================================================================*/

$icons = get_sub_field('icons')

?>

<div class="callout-icons flex flex-wrap flex-grid four-column">

	<?php foreach ($icons as $icon) : ?>

		<div class="flex-child">

			<img src="<?php echo $icon['icon']['sizes']['1-1-md'] ?>" alt="<?php echo $icon['icon']['alt']; ?>" title="<?php echo $icon['icon']['title']; ?>" class="callout-icons__single" />

		</div>

	<?php endforeach; ?>
	
</div>