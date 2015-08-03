<?php
use yii\helpers\Html;
use  yii\bootstrap\Nav;
?>
<!-- start header -->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <h1><a href="<?=Yii::$app->homeUrl;?>"><?= Html::img('@web/images/logo.png', ['width'=>'60']);?></a></h1>
            </div>
            <div class="h_right">
                <?php echo Nav::widget([
                    'items' => [
                        ['label' => 'home','url' => ['/index/view']],
                        ['label' => 'blog','url' => ['/blog/blog/view']],
                        ['label' => 'about','url' => ['/about/view']],
                        ['label' => 'contact','url' => ['/contact/view']],
                    ],
                    'options' => ['class' =>'menu'],
                ]);
                ?>
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
                <script src="js/classie.js"></script>
                <script src="js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!-- start smart_nav * -->
                <nav class="nav">
                    <?php echo Nav::widget([
                        'items' => [
                            ['label' => 'home','url' => ['/index/view']],
                            ['label' => 'blog','url' => ['/blog/blog/view']],
                            ['label' => 'about','url' => ['/about/view']],
                            ['label' => 'contact','url' => ['/contact/view']],
                        ],
                        'options' => ['class' =>'nav-list'],
                    ]);
                    ?>
                </nav>
                <script type="text/javascript" src="js/responsive.menu.js"></script>
                <!-- end smart_nav * -->
                <div class="h_right">
                    <a class="popup-with-zoom-anim" href="#registration-form" post="<?=$post[post_id]?>">Login/Registration</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header_btm">
            <div class="h_left">
                <h2>Welcome Ladies & Gents to Calm Website.</h2>
                <h3>A theme more stylish than any other on themeforest</h3>
            </div>
            <div class="soc_icons">
                <h2>find us online </h2>
                <ul>
                    <li><a class="icon1" href="#"></a></li>
                    <li><a class="icon2" href="#"></a></li>
                    <li><a class="icon3" href="#"></a></li>
                    <li><a class="icon4" href="#"></a></li>
                    <li><a class="icon5" href="#"></a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>