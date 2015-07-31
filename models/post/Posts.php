<?php

namespace app\models\post;

use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{
    public function getPostsCategory()
    {
        return $this->hasMany(PostsCategory::className(), ['category_id' => 'post_category']);
    }
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['user_id' => 'post_author']);
    }

}

