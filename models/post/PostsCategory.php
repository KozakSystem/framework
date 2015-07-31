<?php

namespace app\models\post;

use yii\db\ActiveRecord;


class PostsCategory extends ActiveRecord
{
    public function getPosts()
    {
        return $this->hasOne(Posts::className(), ['post_category' => 'category_id']);
    }
}
