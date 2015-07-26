<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- start header -->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <h1><a href="<?=Yii::$app->homeUrl;?>"><?= Html::img('@web/images/logo.png', ['width'=>'60']);?></a></h1>
            </div>
            <div class="h_right">
                <ul class="menu">
                    <li><a href="index.html">home</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="portfolio.html">portfolio</a></li>
                    <li class="active"><a href="blog.html">blog</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
                <!-- start smart_nav * -->
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="index.html">Home</a></li>
                        <li class="nav-item"><a href="about.html">About</a></li>
                        <li class="nav-item"><a href="portfolio.html">Portfolio</a></li>
                        <li class="nav-item"><a href="blog.html">Blog</a></li>
                        <li class="nav-item"><a href="contact.html">Contact</a></li>
                        <div class="clear"></div>
                    </ul>
                </nav>
                <!-- end smart_nav * -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>