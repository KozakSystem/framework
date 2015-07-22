<a class="popup-with-zoom-anim" href="#small-dialog">
    <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper">
            <img src="images/pic4.jpg" alt="Image 2">
            <div class="label">
                <div class="label-text">
                    <p class="text-title"><?=$post[post_name]?></p>
                    <span class="text-category">
                        <?php
                            //if ($post->post_category == $users->user_name)
                        ?>
                    </span>
                    <hr/>
                    <p class="text"><?=$post[post_date]?></p>
                    <div><?=$post[user_name]?></div>
                    <div><?=$post[category_name]?></div>
                </div>
                <div class="label-bg"></div>
            </div>
        </div>
    </div>
</a>