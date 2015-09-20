<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 *
 * @package Typecho Replica Theme
 * @author Typecho Team
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

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
