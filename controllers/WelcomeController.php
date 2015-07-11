<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use \app\models\Posts;


class WelcomeController extends Controller
{
    public $layout = 'base';
    public $defaultAction = 'view';

    public function actionView()
    {
        return $this->render('welcome');
    }

    public function actionRun($id, $name)
    {
        echo "id is: ". $id ." name is: ". $name;
    }

    public function actionModel() {
        $model = new Posts();
        foreach($model->name as $name => $value) {
            echo "$value";
        }
    }
}