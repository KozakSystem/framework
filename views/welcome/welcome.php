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
                    <a class="btn" href="details.html">Read more</a>
                </div>
            </div>
            <div class="container">
                <ul id="filters" class="clearfix">
                    <li><span class="filter active" data-filter="app card icon logo web">All</span></li>
                    /
                    <li><span class="filter" data-filter="app card logo">design</span></li>
                    /
                    <li><span class="filter" data-filter="card app web icon">branding</span></li>
                    /
                    <li><span class="filter" data-filter="icon web app">graphic</span></li>
                    /
                    <li><span class="filter" data-filter="logo app">animation</span></li>
                    /
                    <li><span class="filter" data-filter="web app card logo icon">illustration</span></li>
                    /
                    <li><span class="filter" data-filter="web app logo card">photography</span></li>
                </ul>
                <div id="portfoliolist">
                        <?php foreach ($posts as $post) : ?>
                            <?= $this->render('/layouts/blocks/_item', ['post' => $post,'user'=>$user]) ?>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

