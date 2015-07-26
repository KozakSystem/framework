<?php

namespace app\controllers\post;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;
use \app\models\Posts;
use \app\models\Users;
use \app\models\PostsCategory;


class PostController extends Controller
{
    public $layout = 'base';
    public $defaultAction = 'view';

    public function getViewPath()
    {
        return Yii::getAlias('@app/views/post');
    }

    public function getLink()
    {
        return url('/post',array('alias'=>$this->alias));
    }

    public function getPosts()
    {
        $query = new \yii\db\Query;
        $query->select('posts.id,post_category, post_name, post_date, user_name, category_name')
            ->from('posts')
            ->leftJoin('users', ' posts.post_author = users.id')
            ->innerJoin('posts_category', ' posts.post_category = posts_category.id');
        $command = $query->createCommand();
        return $posts_category = $command->queryAll();
    }
    public function actionView()
    {
        return $this->render('view', ['posts' => $this->getPosts()] );
    }




    /*public function actionModel() {
        $model = new Posts(['scenario'=>'posts']);
        foreach($model->name as $name => $value) {
            echo "$value";
        }
    }*/
}