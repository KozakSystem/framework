<?php

namespace app\controllers\post;

use Yii;
use yii\web\Controller;
use app\models\post\Posts;

class PostController extends Controller
{
    public $layout = 'base';
    public $defaultAction = 'view';

    public function getViewPath()
    {
        return Yii::getAlias('@app/views/post');
    }
    public function actionLikes($postid) {
        $model = Post::find()->where(['id' => $postid])->one();
        print_r($model->post_likes);

        if(app()->request->isAjaxRequest) {
            echo \CJSON::encode(array(
                'success'=>'true'
            ));
        }
    }
    /*public function getPost($post_id)
    {
        $query = new \yii\db\Query;
        $query->select('posts.*, user_name, category_name')
            ->from('posts')
            ->leftJoin('users', ' posts.post_author =users.id')
            ->innerJoin('posts_category', ' posts.post_category = posts_category.id')
            ->where(['posts.id' => $post_id]);
        $command = $query->createCommand();
        return $command->queryAll();
    }*/
    public function actionView($postid)
    {
        $model = Posts::find()
            ->where(['post_id' => $postid])
            ->rightJoin('users', '`users`.`user_id` = `posts`.`post_author`')
            ->one();
        $model->updateCounters(array('post_views'=>1));
        $model->save();
        print_r($model->user_name);
       // return $this->render('view', ['post' => $model] );
    }
}