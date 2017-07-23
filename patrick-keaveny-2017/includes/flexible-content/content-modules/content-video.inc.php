
<?php 

/*==============================================================================
Flexible Content - Video module
	- Adds an embedded Video
	- If no video is specified, custom thumbnail is displayed
==============================================================================*/

$videos = get_sub_field('videos'); 

?>

<?php if ($videos) : ?>

	<div class="content-video">

		<?php foreach ($videos as $video) : ?>

			<?php 

				$v_url = $video['video_url'];
				$v_thumbnail = $video['video_thumbnail'];

			?>

			<div class="content-video-single <?php echo ($v_url ? 'has-video' : 'no-video'); ?>">

				<?php echo ($v_url ? youtube_embed($v_url) : '<img src="' . $v_thumbnail['sizes']['2-1-lg'] . '" alt="' . $v_thumbnail['alt'] . '" title="' . $v_thumbnail['title'] . '" class="content-video-thumbnail" />'); ?>

			</div>

		<?php endforeach; ?>

	</div>

<?php endif; ?>