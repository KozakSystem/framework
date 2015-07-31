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
                <!-- end smart_nav * -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>