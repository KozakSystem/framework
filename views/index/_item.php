<?php use yii\helpers\Url; //print_r($post);?>

<a class="popup-with-zoom-anim" href="#small-dialog" post="<?=$post[id]?>">
    <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper">
            <img src="images/pic4.jpg" alt="Image 2">
            <div class="label">
                <div class="label-text">
                    <p class="text-title"><?=$post[post_name]?></p>
                    <span class="text-category">
                       <?=$post[category_name]?>
                    </span>
                    <hr/>
                    <p class="text text-date"><?=$post[post_date]?></p>
                    <div class="text text-author"><?=$post[user_name]?></div>
                    <div class="post-desc" style="display:none">
                        <?=substr($post[post_desc], 0, 500);echo "..."?>
                    </div>
                </div>
                <div class="label-bg"></div>
            </div>
        </div>
    </div>
</a>