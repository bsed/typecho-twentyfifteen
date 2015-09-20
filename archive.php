<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<header class="page-header">
                <h1 class="page-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>         </header><!-- .page-header -->



<?php while($this->next()): ?>
<article id="post-<?php $this->cid() ?>" class="post type-post status-publish hentry">
  <header class="entry-header">
    <h2 class="entry-title"><a href="<?php $this->permalink() ?>" rel="bookmark"><?php $this->title() ?></a></h2>  </header><!-- .entry-header -->
  <div class="entry-content">
  <?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
if($imgCount >= 1){
    $img = $matches[2][0];
echo <<<Html
     <p class="post-images">
      <a href="{$this->permalink}" title="{$this->title}">
       <img src="{$img}" alt="{$this->title}">
      </a>
     </p>
Html;
}
?>
    <p><?php $this->excerpt(300, '……'); ?></p>
  </div><!-- .entry-content -->
  <footer class="entry-footer">
    <span class="entry-format"><span class="posted-on"><span class="screen-reader-text">Posted on </span><a href="<?php $this->permalink() ?>" rel="bookmark"><time class="entry-date published updated" datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></a></span><span class="tags-links"><span class="screen-reader-text">Tags </span><?php $this->tags(' , ', true, '暂无标签'); ?></span></footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php endwhile; ?>

<nav class="navigation pagination" role="navigation">
<h2 class="screen-reader-text">文章分页</h2>
<div class="nav-links">
<?php $this->pageLink('上一页','prev'); ?>
<?php $this->pageLink('下一页','next'); ?>
</div>
</nav>


	<?php $this->need('footer.php'); ?>
