<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<?php $this->need('header.php'); ?>


		<article id="post-4" class="post type-post status-publish hentry">

			<header class="entry-header">
				<h1 class="entry-title"><?php $this->title() ?></h1> </header>
			<!-- .entry-header -->

			<div class="entry-content shulan-content">
				<?php $this->content(); ?>
			</div>
			<!-- .entry-content -->


			<footer class="entry-footer">
				<span class="entry-format"><span class="posted-on"><span class="screen-reader-text">Posted on </span><a href="<?php $this->permalink() ?>" rel="bookmark"><time class="entry-date published updated" datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></a></span><span class="tags-links"><span class="screen-reader-text">Tags </span>
				<?php $this->tags(' , ', true, '暂无标签'); ?>
					</span>
			</footer>
			<!-- .entry-footer -->
		</article>
		<!-- #post-## -->

		<div id="comments" class="comments-area">

			<h2 class="comments-title">
            <center>微信扫一扫 或 长按图片识别二维码</center></h2>
			<p class="wechatimg">
				<center><img src="<?php $this->options->themeUrl('qr.jpg'); ?>"></center>
			</p>
		</div>


		<?php $this->need('footer.php'); ?>