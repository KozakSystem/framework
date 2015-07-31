<?php
    use yii\helpers\Url;
    $this->title = 'USA';
?>

<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div id="small-dialog" class="mfp-hide">
                <div class="pop_up">
                    <h2>Lorem Ipsum is simply dummy text of the printing and industry</h2>
                    <img src="images/zoom.jpg" title="image-name">

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic</p>
                    <a class="btn" href="<?= '/post/'.$post[post_id]; ?>">Read more</a>
                </div>
            </div>
            <div class="container">
                <ul id="filters" class="clearfix">
                    <li><a href="<?=Yii::$app->homeUrl?>"><span class="filter active" data-filter="app card icon logo web">All</span></a></li>
                    <?php foreach ($posts_category as $category) : ?>
                        <span>/</span> <li><a href="<?=Yii::$app->homeUrl?>category/<?=$category->category_id?>"><span class="filter" data-filter="app card logo"><?=$category->category_name?></span></a></li>
                    <?php endforeach; ?>
                </ul>
                <div id="portfoliolist">
                        <?php foreach ($posts as $post) : ?>
                            <?= $this->render('/index/_item', ['post' => $post]) ?>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

