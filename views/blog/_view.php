<?php
use yii\helpers\Html;
?>
<div class="blog_main">
    <?= Html::img('@web'.$one_post->post_title_img);?>
    <div class="b_left">
        <h4 class="bg"><?= Html::img('@web/images/note.jpg');?></h4>
    </div>
    <div class="b_right">
        <h4><?= $one_post[post_name]?></h4>
        <div class="blog_list">
            <ul>
                <li><a href="#"> <i class="date"> </i><span> <?= $one_post->post_date?></span></a></li>
                <li><a href="#"> <i class="comment"> </i> <span>Comments</span></a></li>
                <li><a href="#"> <i class="news"> </i><span><?= $one_post->postsCategory[0][category_name]?></span></a></li>
                <li><a href="#"> <i class="views"> </i><span><?= $one_post->post_views?> views</span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="blog_art">
            <ul>
                <li><a href="#" class="post-likes" data-id="<?=$one_post->post_id?>"> <i> </i><span><?=$one_post->post_likes?></span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
    <p><?=substr($one_post[post_desc], 0,500)."..."?></p>
    <a class="btn" href="<?=Yii::$app->homeUrl;?>post/<?=$one_post->post_id?>">read more</a>
</div>