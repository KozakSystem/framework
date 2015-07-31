<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Blog';
?>
<!-- start slider -->
<div class="slider_bg">
    <div class="wrap">
        <div class="slider">
            <h2>Blog</h2>
            <h3>Free blog about free country</h3>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="content">
                <!-- start blog_left -->
                <div class="blog_left">
                    <?php foreach ($posts as $one_post) : ?>
                        <?= $this->render('/blog/_view', ['one_post' => $one_post]) ?>
                    <?php endforeach; ?>

                    <?= LinkPager::widget(['pagination' => $pagination]) ?>
                </div>
                <!-- start blog_sidebar -->
                <div class="blog_sidebar">
                    <div class="sidebar">
                        <!-- start social_network_likes -->
                        <div class="social_network_likes">
                            <ul>
                                <li><a href="#" class="tweets"><div class="followers"><p><span>2k</span>Followers</p></div><div class="social_network"><i class="twitter-icon"> </i> </div></a></li>
                                <li><a href="#" class="facebook-followers"><div class="followers"><p><span>5k</span>Followers</p></div><div class="social_network"><i class="facebook-icon"> </i> </div></a></li>
                                <li><a href="#" class="email"><div class="followers"><p><span>7.5k</span>members</p></div><div class="social_network"><i class="email-icon"> </i></div> </a></li>
                                <li><a href="#" class="dribble"><div class="followers"><p><span>10k</span>Followers</p></div><div class="social_network"><i class="dribble-icon"> </i></div></a></li>
                                <div class="clear"> </div>
                            </ul>
                        </div>
                        <!-- start sap_tabs -->
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul class="resp-tabs-list">
                                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Recent</span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Comments</span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Popular</span></li>
                                    <div class="clear"></div>
                                </ul>
                                <div class="resp-tabs-container">
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="facts">
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic1.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsad.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic2.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic3.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic4.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="facts">
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic5.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic2.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/tab_pic2.jpg');?><a href="#" class="date"> 21 March 2013</a>
                                                        <span class="author">Author: <a href="#">Lorem</a></span>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                            <ul class="tab-left">
                                                <span class="tab-img"> <?= Html::img('@web/images/tab_pic1.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic4.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2">
                                        <div class="facts">
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic3.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic1.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/comment.png');?><a href="#" class="comments"> 3 Comments</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic3.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                            <ul class="tab-left">
                                                <span class="tab-img"><?= Html::img('@web/images/tab_pic5.jpg');?></span>
                                                <div class="tab-text">
                                                    <p><a href="#">Lorem ipsum dolor sitsah.</a></p>
                                                    <div class="post-meta">
                                                        <?= Html::img('@web/images/date.png');?><a href="#" class="date"> 21 March 2013</a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end sap_tabs -->
                        <!-- start flicker images -->
                        <h4>ads 125x125</h4>
                        <ul class="ads_nav">
                            <li><a href="#"><?= Html::img('@web/images/ads_pic.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/ads_pic.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/ads_pic.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/ads_pic.jpg');?> </a></li>
                            <div class="clear"></div>
                        </ul>
                        <!-- start flicker images -->
                        <h4>flicker images</h4>
                        <ul class="flicker_nav">
                            <li><a href="#"><?= Html::img('@web/images/f_pic1.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/f_pic2.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/f_pic3.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/f_pic4.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/f_pic3.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/f_pic4.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/f_pic5.jpg');?> </a></li>
                            <li><a href="#"><?= Html::img('@web/images/f_pic6.jpg');?> </a></li>
                            <div class="clear"></div>
                        </ul>
                        <!-- start tag_nav -->
                        <h4>tags</h4>
                        <ul class="tag_nav">
                            <li><a href="#">art</a></li>
                            <li><a href="#">awesome</a></li>
                            <li><a href="#">classic</a></li>
                            <li><a href="#">photo</a></li>
                            <li><a href="#">wordpress</a></li>
                            <li><a href="#">videos</a></li>
                            <li><a href="#">standard</a></li>
                            <li><a href="#">gaming</a></li>
                            <li><a href="#">photo</a></li>
                            <li><a href="#">music</a></li>
                            <li><a href="#">data</a></li>
                            <div class="clear"></div>
                        </ul>
                        <!-- start news_letter -->
                        <h4>newsletter</h4>
                        <div class="news_letter">
                            <form>
                                <input type="text" placeholder="Your email address" />
                                <input type="submit" value="subscibe" />

                            </form>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>