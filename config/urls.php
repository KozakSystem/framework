<?php
return [
    'home' => '/index/view',
    'blog' => '/blog/blog/view',
    'post/<postid:.>' => '/post/post/view',
    'category/<sort_id:.*>' => '/index/sort-posts',
    'post/date/<postdate:.*>' => '/blog/blog/sort-date',
    'post/category/<categoryid:.>' => '/blog/blog/sort-category',
    'post/views/<postviews:.>' => '/blog/blog/sort-views',
    'post/author/<authorid:.>' => '/blog/blog/sort-author',
    'post/likes/<postid:.>' => '/post/post/likes',
];