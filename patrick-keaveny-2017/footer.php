		</div><!--.container-->
		<footer class="footer">
			<? get_template_part('/includes/_components/color-gradient.inc'); ?>
			<div class="footer-inner flex justify-center">
				<div class="footer-menu"><? get_template_part('/includes/footer/footer-menu-social.inc'); ?></div>
				<div class="footer-menu"><? get_template_part('/includes/footer/footer-menu-pages.inc'); ?></div>
				<div class="footer-menu"><? get_template_part('/includes/footer/footer-menu-categories.inc'); ?></div>
			</div>
		</footer>
<style type="text/css">
	.page-id-1324 .story-intro.wysiwyg p:last-child { display: none }</style>
		<div class="copyright">
			Copyright &copy; <?php echo date('Y'); ?> Patrick C. Keaveny <span class="footer-break"> | </span> All Rights Reserved
		</div>
		<?php wp_footer(); ?>
		<script src="<? bloginfo('template_url'); ?>/js/main.min.js?v=12"></script>
	</body>
</html>