<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<article id="post-4" class="post type-post status-publish hentry">

    <header class="entry-header">
        <h1 class="entry-title"><?php $this->title() ?></h1> </header><!-- .entry-header -->

    <div class="entry-content shulan-content">
        <?php $this->content(); ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->


<?php $this->need('footer.php'); ?>
