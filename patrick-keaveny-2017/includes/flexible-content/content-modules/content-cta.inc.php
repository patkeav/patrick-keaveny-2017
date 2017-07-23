
<?php 

/*==============================================================================
Flexible Content - CTA module
	- Adds a CTA (Call to Action)
==============================================================================*/

$cta_text = get_sub_field('cta_text'); 
$cta_link = (get_sub_field('cta_page') ? get_sub_field('cta_page') : get_bloginfo('url') . '/shop');

?>

<?php if ($cta_text) : ?>

	<div class="content-cta">

		<a href="<?php echo $cta_link; ?>"><?php echo $cta_text; ?></a>

	</div>

<?php endif; ?>