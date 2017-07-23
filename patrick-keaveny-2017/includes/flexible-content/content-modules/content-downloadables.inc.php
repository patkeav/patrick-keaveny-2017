
<?php 

/*==============================================================================
Flexible Content - Downloadable module
	- Adds a downloadable file
==============================================================================*/

$downloadables = get_sub_field('d_items');

?>

<?php if ($downloadables) : ?>

	<div class="content-downloadables">

		<?php foreach ($downloadables as $d) : ?>

			<?php 
				$file = $d['d_file'];
				$f_url = $file['url'];
				$f_title = ($d['d_title'] !== '' ? $d['d_title'] : $file['filename']);

			?>

			<a href="<?php echo $f_url ?>" class="content-downloadables-single" target="_blank">Download <?php echo $f_title; ?></a>

		<?php endforeach; ?>

	</div>

<?php endif; ?>