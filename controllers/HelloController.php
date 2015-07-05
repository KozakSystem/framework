<?php
/**
 * Created by PhpStorm.
 * User: Користувач
 * Date: 05.07.2015
 * Time: 14:58
 */

namespace app\controllers;

use yii\web\Controller;

class HelloController {
    public function actionSay($message = "Привіт") {
        return $this->render("say",['message'=>$message]);
    }
}