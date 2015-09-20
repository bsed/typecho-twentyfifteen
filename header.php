<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="all" />
    <meta name="wot-verification" content="de183481b8dda86d1c5b"/>
    <meta name="norton-safeweb-site-verification" content="dgow367faunl1w8ba40xzn8cqnbka-d0o73gled3k0nl74uulgkcxratmpgpl-b40cbapjjllsxvyizifs-7k51n5f06dsf8glr5g2yqcmb-vox8tmsutgicnmwiydj6" />
    <link rel="icon" href="<?php  $this->options->themeUrl('favicon.ico'); ?>" type="image/ico">
    <!--[if lt IE 9]>
    <script src="<?php $this->options->themeUrl('js/html5.js'); ?>"></script>
    <![endif]-->
    <script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel='stylesheet' id='genericons-css'  href="<?php $this->options->themeUrl('css/genericons.css?ver=3.2'); ?>"  type='text/css' media='all' />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentyfifteen-ie-css'  href="<?php $this->options->themeUrl('css/ie.css'); ?>" type='text/css' media='all' />
<![endif]-->
<!--[if lt IE 8]>
<link rel='stylesheet' id='twentyfifteen-ie7-css'  href="<?php $this->options->themeUrl('css/ie7.css'); ?>"  type='text/css' media='all' />
<![endif]-->
<link rel="canonical" href="<?php $this->permalink() ?>" />
<script type='text/javascript' src="<?php $this->options->themeUrl('js/jquery.js'); ?>"></script>
<script type='text/javascript' src="<?php $this->options->themeUrl('js/jquery-migrate.min.js'); ?>"></script>
<?php $this->header("generator=&template="); ?>
</head>
<body class="home blog">
<div id="page" class="hfeed site">

<div id="sidebar" class="sidebar">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                                        <h1 class="site-title"><a href="<?php $this->options->siteUrl(); ?>" rel="home"><?php $this->options->title() ?></a></h1>
                                            <p class="site-description"><?php $this->options->description() ?></p>
                                    <button class="secondary-toggle">Menu and widgets</button>
            </div><!-- .site-branding -->
        </header><!-- .site-header -->

            <div id="secondary" class="secondary">

                    <div id="widget-area" class="widget-area" role="complementary">


                 <aside id="recent-posts-2" class="widget widget_recent_entries">

                <h2 class="widget-title">Recent Posts</h2>      <ul>
                    <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                </ul>
        </aside>

        <aside id="categories-2" class="widget widget_categories"><h2 class="widget-title">Categories</h2>

<ul>
<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
<?php while ($category->next()): ?>
<li<?php if ($this->is('post')): ?><?php if ($this->category == $category->slug): ?> class="current"<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> class="current"<?php endif; ?><?php endif; ?>><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
<?php endwhile; ?>
</ul>

</aside>

<aside id="search-2" class="widget widget_search"><form role="search" method="post" class="search-form" action="./">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
                </label>
                <input type="submit" class="search-submit screen-reader-text" value="Search" />
            </form></aside>

           </div><!-- .widget-area -->

    </div><!-- .secondary -->

    </div><!-- .sidebar -->



<div id="content" class="site-content">

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">



