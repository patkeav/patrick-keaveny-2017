		</div><!--.container-->
		<footer class="footer">
			<? get_template_part('/includes/_components/color-gradient.inc'); ?>
			<div class="footer-inner flex justify-center">
				<div class="footer-menu"><? get_template_part('/includes/footer/footer-menu-social.inc'); ?></div>
				<div class="footer-menu"><? get_template_part('/includes/footer/footer-menu-pages.inc'); ?></div>
				<div class="footer-menu"><? get_template_part('/includes/footer/footer-menu-categories.inc'); ?></div>
			</div>
		</footer>
		<div class="copyright">
			Copyright &copy; <?php echo date('Y'); ?> Patrick C. Keaveny <span class="footer-break"> | </span> All Rights Reserved
		</div>
		<?php wp_footer(); ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-42533885-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<? if (is_front_page()) : ?>
			<script src="<? bloginfo('template_url'); ?>/js/home-feature.js?v=1"></script>
		<? endif; ?>
	</body>
</html>