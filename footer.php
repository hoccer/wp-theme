			<!-- footer section -->
			<div id="footer-outside">
				<footer id="footer" class="inner">
				<nav id="footer-navigation">
					<?php wp_nav_menu(array('theme_location'=>'footer')); ?>
				</nav>
				<aside id="footer-stamp">
					<span>&copy; <?php echo date('Y'); ?> Hoccer Betriebs GmbH</span>
				</aside>
				</footer>
			</div>
		<?php wp_footer(); ?>

		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<script type="text/javascript">
			(function() {
				var po = document.createElement('script');
					po.type = 'text/javascript';
					po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(po, s);
			})();
		</script>

		<!--              ▲              -->
		<!--             ▲ ▲             -->

	</body>
</html>