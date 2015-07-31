<?php
return [
    'category/<sort_id:.*>' => '/index/sort-posts',
    'post/<postid:.>' => '/post/post/view',
    'home' => '/index/view',
    'blog' => '/blog/blog/view',
    'post/likes/<postid:.>' => '/post/post/likes',
];