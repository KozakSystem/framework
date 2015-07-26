<?php
namespace app\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public function actionCategory($categories)
    {
        $params = explode('/', $categories);
        print_r($categories);
    }
}