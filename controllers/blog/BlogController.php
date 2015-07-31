<?php

namespace app\controllers\blog;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\post\Posts;


class BlogController extends Controller
{
    public $layout = 'base';
    public $defaultAction = 'view';

    public function getViewPath()
    {
        return Yii::getAlias('@app/views/blog');
    }

    public function getLink()
    {
        return url('/post',array('alias'=>$this->alias));
    }

    public function actionView()
    {
        // $model = new \app\models\blog\Blog;


//        $model = Posts::find()
//            ->leftJoin('users', '`posts`.`post_author` = `users`.`user_id`')
//            ->leftJoin('posts_category', ' `posts`.`post_category` =  `posts_category`.`category_id`');
//            ->joinWith(['posts.post_author' => 'users.user_id'])
//            ->joinWith('users')
//            ->WHERE([' posts_category.category_id' => 'posts.post_category ', 'posts.post_author' => 'users.user_id']);


        $posts = Posts::find()->with('users', 'postsCategory')->all();
        //print_r($posts[0]->users[0][user_name]);
        $pagination  = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => count($posts),
        ]);


        return $this->render('view', ['posts' => $posts,'pagination' => $pagination] );
    }
}