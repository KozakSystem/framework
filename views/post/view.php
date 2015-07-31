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
                    <h3><?=$post->post_date." - ".$post->post_author?> </h3>
                    <h4><?=$post->post_views?></h4>
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