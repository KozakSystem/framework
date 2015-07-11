<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class Posts extends Model
{
    public $post_author;
    public $post_name;
    public $post_category;
    public $post_time;
    public $name;

    function __construct() {
        $this->name[1] = "Model atribute 1";
        $this->name[2] = "Model atribute 2";
        $this->name[3] = "Model atribute 3";
    }
}
