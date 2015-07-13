<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use \app\models\Posts;
use \app\models\Users;

class WelcomeController extends Controller
{
    public $layout = 'base';
    public $defaultAction = 'view';

    public function actionView()
    {
        $posts = Posts::find()->orderBy('id')->all();
        $customers = Users::findBySql('SELECT user_name FROM users WHERE id=1')->all();
        $user = Users::find()->where(['id' => '1'])->one();

        return $this->render('welcome', ['posts' => $posts, 'user'=>$user] );
    }


    /*public function actionModel() {
        $model = new Posts(['scenario'=>'posts']);
        foreach($model->name as $name => $value) {
            echo "$value";
        }
    }*/
}