
<?php 

/*==============================================================================
Flexible Content - Quote Module
	- Adds a pull quote
==============================================================================*/

$quote = get_sub_field('quote');


?>

<div class="skinny-content">
	<p class="quote">
		"<?php echo $quote; ?>"
	</p>
</div>