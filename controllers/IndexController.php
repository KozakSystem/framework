<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;
use \app\models\Posts;
use \app\models\Users;
use \app\models\PostsCategory;


class IndexController extends Controller
{
    public $layout = 'main';
    public $defaultAction = 'view';


    public function getPostsCategory()
    {
        return $posts_category = PostsCategory::find('category_name')->orderBy('id')->all();
    }
    public function getPosts()
    {
        $query = new \yii\db\Query;
        $query->select('posts.id,post_category, post_name, post_date, post_desc, user_name, category_name')
            ->from('posts')
            ->leftJoin('users', ' posts.post_author = users.id')
            ->innerJoin('posts_category', ' posts.post_category = posts_category.id');
        $command = $query->createCommand();
        return $posts_category = $command->queryAll();
    }
    public function actionView()
    {
        /*$posts =  Posts::findBySql('
            SELECT post_category, post_name, post_date, user_name
            FROM posts
            LEFT JOIN users
            ON posts.post_author = users.id
            ORDER BY posts.post_date;
        ')->all();*/



       // $users = Users::find()->orderBy('id')->all();
        //$user = Users::findBySql('SELECT user_name FROM users')->where('id=$posts->post_author')->all();
        return $this->render('index', ['posts' => $this->getPosts(), 'posts_category' => $this->getPostsCategory()] );
    }




    /*public function actionModel() {
        $model = new Posts(['scenario'=>'posts']);
        foreach($model->name as $name => $value) {
            echo "$value";
        }
    }*/
}