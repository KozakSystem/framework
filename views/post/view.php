<?php
use yii\helpers\Html;
?>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="content">
                <!-- start details -->
                <div class="details">
                    <h2><?=$post->post_name?></h2>
                    <h3><?=$post->post_date." - ".$post->users[0][user_name]?> </h3>
                    <div class="blog_list">
                        <ul>
                            <li><a> <i class="date"> </i><span> <?=$post->post_date?></span></a></li>
                            <li><a> <i class="comment"> </i> <span>Comments</span></a></li>
                            <li><a> <i class="news"> </i><span><?=$post->postsCategory[0][category_name]?></span></a></li>
                            <li><a > <i class="views"> </i><span><?=$post->post_views?> views</span></a></li>
                            <li><a href="<?=Yii::$app->homeUrl;?>post/author/<?=$post->post_author?>"> <i class="user"> </i><span><?=$post->users[0][user_name]?></span></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="det_pic">
                        <?= Html::img('@web'.$post->post_title_img);?>
                    </div>
                    <div class="det_text">
                        <p class="para"><?=$post->post_desc?></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- end details -->
            </div>
        </div>
    </div>
</div>