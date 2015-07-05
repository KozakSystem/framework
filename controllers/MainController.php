<?php
/**
 * Created by PhpStorm.
 * User: Користувач
 * Date: 05.07.2015
 * Time: 15:47
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class MainController extends Controller {
    public function actionHome($message = 'home') {
        return $this->render('home', [
            'message' => $message,
        ]);
    }
}