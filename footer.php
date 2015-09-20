<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

	</main>
	<!-- .site-main -->
	</div>
	<!-- .content-area -->


	</div>
	<!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			黑ICP备15001144号-3
		</div>
		<!-- .site-info -->
	</footer>
	<!-- .site-footer -->

	</div>
	<!-- .site -->

	<?php $this->footer(); ?>
		<?php if(!is_mobile()) : ?>
			<?php echo '加载耗时：',timer_stop(), ' s';?>
				<?php endif;?>
					<script type='text/javascript' src="<?php $this->options->themeUrl('js/skip-link-focus-fix.js'); ?>"></script>
					<script type='text/javascript'>
						/* <![CDATA[ */
						var screenReaderText = {
							"expand": "<span class=\"screen-reader-text\">expand child menu<\/span>",
							"collapse": "<span class=\"screen-reader-text\">collapse child menu<\/span>"
						};
						/* ]]> */
					</script>
					<script type='text/javascript' src="<?php $this->options->themeUrl('js/functions.js'); ?>"></script>
					<script>
						var _hmt = _hmt || [];
						(function () {
							var hm = document.createElement("script");
							hm.src = "//hm.baidu.com/hm.js?9877e10f99d1ac8bf2d490319e08712b";
							var s = document.getElementsByTagName("script")[0];
							s.parentNode.insertBefore(hm, s);
						})();
					</script>

					</div id="page">
					</body>

					</html>